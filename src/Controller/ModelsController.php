<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Subcategories Controller
 *
 * @property \App\Model\Table\ModelsTable $Models
 *
 * @method \App\Model\Entity\Model[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModelsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['getByMake']);
    }

    public function isAuthorized($user) {
        // All actions are allowed to logged in users for subcategories.
        return true;
    }

    public function getByMake() {
        $make_id = $this->request->getQuery('make_id');

        $models = $this->Models->find('all', [
            'conditions' => ['Models.make_id' => $make_id],
        ]);
        $this->set('models', $models);
        $this->set('_serialize', ['models']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Makes']
        ];
        $models = $this->paginate($this->Models);

        $this->set(compact('models'));
    }

    /**
     * View method
     *
     * @param string|null $id Subcategory id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $model = $this->Models->get($id, [
            'contain' => ['Makes', 'Cars']
        ]);

        $this->set('model', $model);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $model = $this->Models->newEntity();
        if ($this->request->is('post')) {
            $model = $this->Models->patchEntity($model, $this->request->getData());
            if ($this->Models->save($model)) {
                $this->Flash->success(__('The model has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The model could not be saved. Please, try again.'));
        }
        $makes = $this->Models->Makes->find('list', ['limit' => 200]);
        $this->set(compact('model', 'makes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subcategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $model = $this->Models->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $model = $this->Models->patchEntity($model, $this->request->getData());
            if ($this->Models->save($model)) {
                $this->Flash->success(__('The model has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The model could not be saved. Please, try again.'));
        }
        $makes = $this->Models->Makes->find('list', ['limit' => 200]);
        $this->set(compact('model', 'makes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subcategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $model = $this->Models->get($id);
        if ($this->Models->delete($model)) {
            $this->Flash->success(__('The model has been deleted.'));
        } else {
            $this->Flash->error(__('The model could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
