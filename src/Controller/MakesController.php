<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\MakesTable $Makes
 *
 * @method \App\Model\Entity\Make[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MakesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $makes = $this->paginate($this->Categories);

        $this->set(compact('makes'));
    }

    /**
     * View method
     *
     * @param string|null $id Make id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $make = $this->Categories->get($id, [
            'contain' => ['Models']
        ]);

        $this->set('make', $make);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $make = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $make = $this->Categories->patchEntity($make, $this->request->getData());
            if ($this->Categories->save($make)) {
                $this->Flash->success(__('The make has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The make could not be saved. Please, try again.'));
        }
        $this->set(compact('make'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Make id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $make = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $make = $this->Categories->patchEntity($make, $this->request->getData());
            if ($this->Categories->save($make)) {
                $this->Flash->success(__('The make has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The make could not be saved. Please, try again.'));
        }
        $this->set(compact('make'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Make id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $make = $this->Categories->get($id);
        if ($this->Categories->delete($make)) {
            $this->Flash->success(__('The make has been deleted.'));
        } else {
            $this->Flash->error(__('The make could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
