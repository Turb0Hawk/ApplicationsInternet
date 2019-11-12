<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoursesNames Controller
 *
 * @property \App\Model\Table\CoursesNamesTable $CoursesNames
 *
 * @method \App\Model\Entity\CoursesName[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursesNamesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $coursesNames = $this->paginate($this->CoursesNames);

        $this->set(compact('coursesNames'));
    }

    /**
     * View method
     *
     * @param string|null $id Courses Name id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coursesName = $this->CoursesNames->get($id, [
            'contain' => []
        ]);

        $this->set('coursesName', $coursesName);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coursesName = $this->CoursesNames->newEntity();
        if ($this->request->is('post')) {
            $coursesName = $this->CoursesNames->patchEntity($coursesName, $this->request->getData());
            if ($this->CoursesNames->save($coursesName)) {
                $this->Flash->success(__('The courses name has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The courses name could not be saved. Please, try again.'));
        }
        $this->set(compact('coursesName'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Courses Name id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coursesName = $this->CoursesNames->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coursesName = $this->CoursesNames->patchEntity($coursesName, $this->request->getData());
            if ($this->CoursesNames->save($coursesName)) {
                $this->Flash->success(__('The courses name has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The courses name could not be saved. Please, try again.'));
        }
        $this->set(compact('coursesName'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Courses Name id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coursesName = $this->CoursesNames->get($id);
        if ($this->CoursesNames->delete($coursesName)) {
            $this->Flash->success(__('The courses name has been deleted.'));
        } else {
            $this->Flash->error(__('The courses name could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * findCoursesNames method
     * for use with JQuery-UI Autocomplete
     *
     * @return JSon query result
     */
    public function findCoursesNames() {

        if ($this->request->is('ajax')) {

            $this->autoRender = false;
            $name = $this->request->query['term'];
            $results = $this->CoursesNames->find('all', array(
                'conditions' => array('CoursesNames.name LIKE ' => '%' . $name . '%')
            ));

            $resultArr = array();
            foreach ($results as $result) {
                $resultArr[] = array('label' => $result['name'], 'value' => $result['name']);
            }
            echo json_encode($resultArr);
        }
    }

    public function autocomplete() {

    }
}
