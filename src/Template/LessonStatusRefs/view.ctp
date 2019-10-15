<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LessonStatusRef $lessonStatusRef
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lesson Status Ref'), ['action' => 'edit', $lessonStatusRef->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lesson Status Ref'), ['action' => 'delete', $lessonStatusRef->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lessonStatusRef->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lesson Status Refs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lesson Status Ref'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lessonStatusRefs view large-9 medium-8 columns content">
    <h3><?= h($lessonStatusRef->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($lessonStatusRef->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lessonStatusRef->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($lessonStatusRef->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($lessonStatusRef->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Courses') ?></h4>
        <?php if (!empty($lessonStatusRef->courses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Length') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Lesson Date') ?></th>
                <th scope="col"><?= __('Instructor Id') ?></th>
                <th scope="col"><?= __('Car Id') ?></th>
                <th scope="col"><?= __('Lesson Status Ref Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($lessonStatusRef->courses as $courses): ?>
            <tr>
                <td><?= h($courses->id) ?></td>
                <td><?= h($courses->name) ?></td>
                <td><?= h($courses->length) ?></td>
                <td><?= h($courses->customer_id) ?></td>
                <td><?= h($courses->lesson_date) ?></td>
                <td><?= h($courses->instructor_id) ?></td>
                <td><?= h($courses->car_id) ?></td>
                <td><?= h($courses->lesson_status_ref_id) ?></td>
                <td><?= h($courses->created) ?></td>
                <td><?= h($courses->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Courses', 'action' => 'view', $courses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Courses', 'action' => 'edit', $courses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courses', 'action' => 'delete', $courses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
