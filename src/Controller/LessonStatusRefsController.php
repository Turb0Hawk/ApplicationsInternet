<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LessonStatusRefs Controller
 *
 * @property \App\Model\Table\LessonStatusRefsTable $LessonStatusRefs
 *
 * @method \App\Model\Entity\LessonStatusRef[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LessonStatusRefsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $lessonStatusRefs = $this->paginate($this->LessonStatusRefs);

        $this->set(compact('lessonStatusRefs'));
    }

    /**
     * View method
     *
     * @param string|null $id Lesson Status Ref id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lessonStatusRef = $this->LessonStatusRefs->get($id, [
            'contain' => ['Courses']
        ]);

        $this->set('lessonStatusRef', $lessonStatusRef);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lessonStatusRef = $this->LessonStatusRefs->newEntity();
        if ($this->request->is('post')) {
            $lessonStatusRef = $this->LessonStatusRefs->patchEntity($lessonStatusRef, $this->request->getData());
            if ($this->LessonStatusRefs->save($lessonStatusRef)) {
                $this->Flash->success(__('The lesson status ref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lesson status ref could not be saved. Please, try again.'));
        }
        $this->set(compact('lessonStatusRef'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lesson Status Ref id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lessonStatusRef = $this->LessonStatusRefs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lessonStatusRef = $this->LessonStatusRefs->patchEntity($lessonStatusRef, $this->request->getData());
            if ($this->LessonStatusRefs->save($lessonStatusRef)) {
                $this->Flash->success(__('The lesson status ref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lesson status ref could not be saved. Please, try again.'));
        }
        $this->set(compact('lessonStatusRef'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lesson Status Ref id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lessonStatusRef = $this->LessonStatusRefs->get($id);
        if ($this->LessonStatusRefs->delete($lessonStatusRef)) {
            $this->Flash->success(__('The lesson status ref has been deleted.'));
        } else {
            $this->Flash->error(__('The lesson status ref could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
