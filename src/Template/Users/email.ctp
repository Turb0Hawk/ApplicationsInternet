<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('List Instructors'), ['controller' => 'Instructors', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Instructor'), ['controller' => 'Instructors', 'action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('Email'), [ 'action' => 'email']) ?></li>
</ul>
<div class="users email large-9 medium-8 columns content">
    <?php echo __('sent'); ?>
</div>
