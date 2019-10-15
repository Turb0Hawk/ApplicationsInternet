<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instructor $instructor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $instructor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $instructor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Instructors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instructors form large-9 medium-8 columns content">
    <?= $this->Form->create($instructor) ?>
    <fieldset>
        <legend><?= __('Edit Instructor') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('lastName');
            echo $this->Form->control('phone');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
