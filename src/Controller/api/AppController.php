<?php

namespace App\Controller\Api;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;

class AppController extends Controller {

    use \Crud\Controller\ControllerTrait;

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Auth');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Crud.Crud', [
            'actions' => [
                'Crud.Index',
                'Crud.View',
                'Crud.Add',
                'Crud.Edit',
                'Crud.Delete'
            ],
            'listeners' => [
                'Crud.Api',
                'Crud.ApiPagination',
                'Crud.ApiQueryLog'
            ]
        ]);
    }

}
