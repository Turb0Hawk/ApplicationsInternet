<?php

use Cake\Core\Configure;

?>
<h1>Login</h1>
<?= $this->Form->create() ?>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password') ?>
    <div>
        <div class="g-recaptcha"
             data-sitekey="<?php echo Configure::read('Recaptcha.SiteKey'); ?>">
        </div>
        <?php echo $this->Html->script('https://www.google.com/recaptcha/api.js"'); ?>
    </div>
    <?= $this->Form->button('Connexion') ?>
<?= $this->Form->end() ?>
<button type="button" class="btn btn-primary">
    <?= $this->Html->link(__('Register'), ['controller' => 'users', 'action' => 'register']) ?>
</button>
