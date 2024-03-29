<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cars Controller
 *
 * @property \App\Model\Table\CarsTable $Cars
 *
 * @method \App\Model\Entity\Car[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarsController extends AppController
{

    public function initialize() {
        parent::initialize();

        // Include the FlashComponent
        $this->loadComponent('Flash');

        // Load Files model
        $this->loadModel('Files');

        // Set the layout
//        $this->layout = 'frontend';
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers']
        ];
        $cars = $this->paginate($this->Cars);

        $this->set(compact('cars'));
    }

    /**
     * View method
     *
     * @param string|null $id Car id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $car = $this->Cars->get($id, [
            'contain' => ['Customers', 'Courses', 'Files']
        ]);

        $this->set(compact('car'));
//        $this->set('car', $car );
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $car = $this->Cars->newEntity();
        if ($this->request->is('post')) {
            $car = $this->Cars->patchEntity($car, $this->request->getData());
            $this->loadModel('Makes');
            $model = $this->Cars->Models->get($this->request->getData('model_id'));
            $car->model = $model->name;
            $car->make = $this->Makes->get($model->make_id)->name;
            if ($this->Cars->save($car)) {
                $this->Flash->success(__('The car has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The car could not be saved. Please, try again.'));
        }

        $customers = $this->Cars->Customers->find('list', ['limit' => 200]);
        // Bâtir la liste des catégories
        $this->loadModel('Makes');
        $makes = $this->Makes->find('list', ['limit' => 200]);

        // Extraire le id de la première catégorie
        $makes = $makes->toArray();
        reset($makes);
        $make_id = key($makes);

        // Bâtir la liste des sous-catégories reliées à cette catégorie
        $models = $this->Cars->Models->find('list', [
            'conditions' => ['Models.make_id' => $make_id],
        ]);

        $this->set(compact('car', 'customers', 'makes', 'models'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Car id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $car = $this->Cars->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $car = $this->Cars->patchEntity($car, $this->request->getData(),[
                'accessibleFields' => ['user_id' => false]
            ]);
            $this->loadModel('Makes');
            $model = $this->Cars->Models->get($this->request->getData('model_id'));
            $car->model = $model->name;
            $car->make = $this->Makes->get($model->make_id)->name;
            if ($this->Cars->save($car)) {
                $this->Flash->success(__('The car has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The car could not be saved. Please, try again.'));
        }
        $customers = $this->Cars->Customers->find('list', ['limit' => 200]);
        //$model = $this->Cars->Models $car->model_id
             // Bâtir la liste des catégories
        $this->loadModel('Makes');
        $makes = $this->Makes->find('list', ['limit' => 200]);

        // Extraire le id de la première catégorie
        $makes = $makes->toArray();
        reset($makes);
        $model = $this->Cars->Models->get($car->model_id);
        $make_id = $this->Makes->get($model->make_id)->id;

        // Bâtir la liste des sous-catégories reliées à cette catégorie
        $models = $this->Cars->Models->find('list', [
            'conditions' => ['Models.make_id' => $make_id],
        ]);

        $this->set(compact('car', 'customers', 'makes', 'models', 'make_id'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Car id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $car = $this->Cars->get($id);
        if ($this->Cars->delete($car)) {
            $this->Flash->success(__('The car has been deleted.'));
        } else {
            $this->Flash->error(__('The car could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function  showFullName($id){
        return $this->Cars->get($id, ['Make', 'Model']);
    }

    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // The add and tags actions are always allowed to logged in users.
        if (in_array($action, ['add', 'edit'])) {
            return true;
        }else{
            return false;
        }
    }

}
