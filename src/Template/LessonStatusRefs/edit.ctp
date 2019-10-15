<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LessonStatusRef $lessonStatusRef
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lessonStatusRef->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lessonStatusRef->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lesson Status Refs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lessonStatusRefs form large-9 medium-8 columns content">
    <?= $this->Form->create($lessonStatusRef) ?>
    <fieldset>
        <legend><?= __('Edit Lesson Status Ref') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
