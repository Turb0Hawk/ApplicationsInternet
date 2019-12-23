q<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Instructors'), ['controller' => 'Instructors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instructor'), ['controller' => 'Instructors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
    <h3><?= h($course->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($course->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $course->has('customer') ? $this->Html->link($course->customer->name, ['controller' => 'Customers', 'action' => 'view', $course->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instructor') ?></th>
            <td><?= $course->has('instructor') ? $this->Html->link($course->instructor->name, ['controller' => 'Instructors', 'action' => 'view', $course->instructor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car') ?></th>
            <td><?= $course->has('car') ? $this->Html->link($course->car->FullName, ['controller' => 'Cars', 'action' => 'view', $course->car->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lesson Status Ref') ?></th>
            <td><?= $course->has('lesson_status_ref') ? $this->Html->link($course->lesson_status_ref->name, ['controller' => 'LessonStatusRefs', 'action' => 'view', $course->lesson_status_ref->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($course->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Length') ?></th>
            <td><?= $this->Number->format($course->length) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lesson Date') ?></th>
            <td><?= h($course->lesson_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($course->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($course->modified) ?></td>
        </tr>
    </table>
</div>
