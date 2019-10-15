<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LessonSatusRef $lessonSatusRef
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lesson Satus Ref'), ['action' => 'edit', $lessonSatusRef->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lesson Satus Ref'), ['action' => 'delete', $lessonSatusRef->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lessonSatusRef->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lesson Satus Refs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lesson Satus Ref'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lessonSatusRefs view large-9 medium-8 columns content">
    <h3><?= h($lessonSatusRef->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lessonSatusRef->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lesson Status Description') ?></th>
            <td><?= $this->Number->format($lessonSatusRef->lesson_status_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lessonSatusRef->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lessonSatusRef->modified) ?></td>
        </tr>
    </table>
</div>
