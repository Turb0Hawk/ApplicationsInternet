<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\Mailer\Email;

   class EmailsController extends AppController{
      public function index(){
         $email = new Email('default');
         $email->to('destinataire@son.site')->subject('Essai de CakePHP Mailer')->send('Vous pourriez construire un lien de confirmation ici');
      }
   }
?>

