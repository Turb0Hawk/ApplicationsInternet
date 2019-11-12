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
    public function initialize(){
        parent::initialize();
        $this->Auth->allow('findCoursesNames');
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
