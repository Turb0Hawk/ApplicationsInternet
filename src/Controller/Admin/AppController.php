<?php

namespace App\Controller\Admin;

    use Cake\Controller\Controller;

class AppController extends Controller {

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    //public function initialize() {
//        parent::initialize();
//
//        $this->loadComponent('RequestHandler');
//        $this->loadComponent('Flash');
//        $this->loadComponent('Auth');
//
//        /*
//         * Enable the following components for recommended CakePHP security settings.
//         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
//         */
//        //$this->loadComponent('Security');
//        //$this->loadComponent('Csrf');
//
//        $this->loadComponent('Auth', [
//            'storage' => 'Memory',
//            'authenticate' => [
//                'Form' => [
//                    'scope' => ['Users.active' => 1]
//                ],
//                'ADmad/JwtAuth.Jwt' => [
//                    'parameter' => 'token',
//                    'userModel' => 'Users',
//                    'scope' => ['Users.active' => 1],
//                    'fields' => [
//                        'username' => 'id'
//                    ],
//                    'queryDatasource' => true
//                ]
//            ],
//            'unauthorizedRedirect' => false,
//            'checkAuthIn' => 'Controller.initialize'
//        ]);

//    }




    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');

        $this->loadComponent('Auth', [
            'authorize' => 'Controller',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'unauthorizedRedirect' => $this->referer()
        ]);

        $this->Auth->allow(
            [
                'display',
                'view',
                'index',
                'register',
                'email',
                'confirm',
                'upload',
                'changeLang',
                'logout',
                'findCoursesNames'
            ]
        );

        I18n::setLocale($this->request->getSession()->read('Config.language'));

    }

    public function isAuthorized($user)
    {
        // Par défaut, on refuse l'accès.
        return false;
    }

    public function changeLang($lang)
    {
        I18n::setLocale($lang);
        $this->request->getSession()->write('Config.language', $lang);
        return $this->redirect($this->request->referer());
    }

}
