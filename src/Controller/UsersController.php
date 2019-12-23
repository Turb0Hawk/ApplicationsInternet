<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Mailer\Email;
use Cake\Utility\Text;
use ReCaptcha;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Customers', 'Instructors']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->role = 'confirmed';
            $user->uuid = Text::uuid();
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }

        $this->set(compact('user' ));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                    return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $role = $this->Auth->user('role');
        $customers = $this->Users->Customers->find('list', ['limit' => 200]);
        $this->set(compact('user', 'customers', 'role'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        require_once "recaptchalib.php";
        // your secret key
        $secret = "6LdiTMkUAAAAANHD4df7RpobqAFRLlZ1e-dFqMKF";

        // empty response
        $response = null;

        // check secret key
        $reCaptcha = new ReCaptcha($secret);

        if ($this->request->is('post')) {
            if ($_POST["g-recaptcha-response"]) {
                $response = $reCaptcha->verifyResponse(
                    $_SERVER["REMOTE_ADDR"],
                    $_POST["g-recaptcha-response"]
                );
            }
            if($response){
                $user = $this->Auth->identify();
                if($response->success){
                    if ($user) {
                        $this->Auth->setUser($user);
                        return $this->redirect($this->Auth->redirectUrl());
                    }
                    $this->Flash->error(__('Your username or password are incorrect.') );
                } else{
                    $this->Flash->error(__('Please answer the captcha.') );
                }

            }
        }
    }

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout', 'add']);
    }

    public function logout()
    {
        $this->Flash->success(__('You have been disconnected.'));
        return $this->redirect($this->Auth->logout());
    }

    public function isAuthorized($user)
    {
        $authorisation = false;
        $action = $this->request->getParam('action');

        switch ($this->Auth->user('role')){
            case 'admin':
                    $authorisation = true;
                break;
            case 'confirmed':
                if(in_array($action, ['add', 'view', 'email'])){
                    $authorisation = true;
                } elseif ($this->request->getParam('pass.0') == $this->Auth->user('id') &&
                    in_array($action, ['delete', 'edit'])){
                    $authorisation = true;
                }
                break;
            case 'user':
                if(in_array($action, ['add', 'view', 'email'])){
                    $authorisation = true;
                }
                break;
            default:
                if (in_array($action, ['add', 'email', 'register'])) {
                    $authorisation = true;
                } else{
                    $authorisation = false;
                }
                break;
        }
        return $authorisation;
    }

    public function email($user){
        $email = new Email('default');
        $email->to($user->email)->setSubject(__('Email Confirmation'))->send(
            __("Please Follow this link to complete registration of your account") .
            "\n\nhttp://" . $_SERVER['HTTP_HOST'] . $this->request->webroot . "users/confirm/" . $user->uuid);
    }

    public function confirm($uuid){
        $user = $this->Users->findByUuid($uuid)->first();
        if ($user){
            if($user->role == 'user'){
                $user->role = 'confirmed';
                $this->Users->save($user);
            }
        }
        $this->redirect(['controller' => 'customers', 'action' => 'index']);
    }

    public function register(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->role = 'user';
            $user->uuid = $uuid = Text::uuid();
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The registration is almost complete! look into your email to complete the process.'));
                $this->email($user);
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be registered. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    private function __checkRecaptchaResponse($response){
        // verifying the response is done through a request to this URL
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        // The API request has three parameters (last one is optional)
        $data = array('secret' => Configure::read('Recaptcha.SecretKey'),
            'response' => $response,
            'remoteip' => $_SERVER['REMOTE_ADDR']);

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );
    }

}
