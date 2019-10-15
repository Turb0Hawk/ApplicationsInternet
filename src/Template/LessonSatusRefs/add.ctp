<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LessonSatusRef $lessonSatusRef
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lesson Satus Refs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lessonSatusRefs form large-9 medium-8 columns content">
    <?= $this->Form->create($lessonSatusRef) ?>
    <fieldset>
        <legend><?= __('Add Lesson Satus Ref') ?></legend>
        <?php
            echo $this->Form->control('lesson_status_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
