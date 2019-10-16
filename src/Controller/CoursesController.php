<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Customer;

/**
 * Courses Controller
 *
 * @property \App\Model\Table\CoursesTable $Courses
 *
 * @method \App\Model\Entity\Course[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Instructors', 'Cars', 'LessonStatusRefs']
        ];
        $courses = $this->paginate($this->Courses);

        $this->set(compact('courses'));
    }

    /**
     * View method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => ['Customers', 'Instructors', 'Cars', 'LessonStatusRefs']
        ]);

        $this->set('course', $course);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $course = $this->Courses->newEntity();
        if ($this->request->is('post')) {
            $course = $this->Courses->patchEntity($course, $this->request->getData());
//            $course->customer_id = $this->Auth->user('customer_id');
            if ($this->Courses->save($course)) {
                $this->Flash->success(__('The course has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }

        $customers = $this->Courses->Customers->find('list', ['limit' => 200]);
        $instructors = $this->Courses->Instructors->find('list', ['limit' => 200]);
        $cars = $this->Courses->Cars->find('list', ['limit' => 200]);
        $lessonStatusRefs = $this->Courses->LessonStatusRefs->find('list', ['limit' => 200]);
        $this->set(compact('course', 'customers', 'instructors', 'cars', 'lessonStatusRefs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $course = $this->Courses->patchEntity($course, $this->request->getData(), [
                'accessibleFields' => ['customer_id' => false]
            ]);
            if ($this->Courses->save($course)) {
                $this->Flash->success(__('The course has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course could not be saved. Please, try again.'));
        }
        $customers = $this->Courses->Customers->find('list', ['limit' => 200]);
        $instructors = $this->Courses->Instructors->find('list', ['limit' => 200]);
        $cars = $this->Courses->Cars->find('list', ['limit' => 200]);
        $lessonStatusRefs = $this->Courses->LessonStatusRefs->find('list', ['limit' => 200]);
        $this->set(compact('course', 'customers', 'instructors', 'cars', 'lessonStatusRefs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Course id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $course = $this->Courses->get($id);
        if ($this->Courses->delete($course)) {
            $this->Flash->success(__('The course has been deleted.'));
        } else {
            $this->Flash->error(__('The course could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
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
                if(in_array($action, ['add', 'view'])){
                    $authorisation = true;
                } elseif ($this->request->getParam('pass.0') == $this->Auth->user('id') &&
                    in_array($action, ['delete', 'edit'])){
                    $authorisation = true;
                }
                break;
            case 'user':
                if(in_array($action, ['add', 'view'])){
                    $authorisation = true;
                }
                break;
            default:
                if (in_array($action, ['add', 'view'])) {
                    $authorisation = true;
                } else{
                    $authorisation = false;
                }
                break;
        }
        return $authorisation;
    }

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout', 'view']);
    }

    protected function getCustomerIdByUserId($userId){
//        Customer::
    }
}
