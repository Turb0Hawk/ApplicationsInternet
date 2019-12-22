<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Connexion') ?>
<?= $this->Form->end() ?>

<button type="button" class="btn btn-primary">
    <div class="g-recaptcha" data-sitekey="6LdiTMkUAAAAAPlZ_TzIkhh2SUAzim4764hBUx-S"></div>
    <?= $this->Html->link(__('Register'), ['controller' => 'users', 'action' => 'register']) ?>
</button>
