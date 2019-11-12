<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursesName $coursesName
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Courses Name'), ['action' => 'edit', $coursesName->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Courses Name'), ['action' => 'delete', $coursesName->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coursesName->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses Names'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Courses Name'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coursesNames view large-9 medium-8 columns content">
    <h3><?= h($coursesName->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($coursesName->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coursesName->id) ?></td>
        </tr>
    </table>
</div>
