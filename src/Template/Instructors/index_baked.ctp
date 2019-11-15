<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instructor[]|\Cake\Collection\CollectionInterface $instructors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instructor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instructors index large-9 medium-8 columns content">
    <h3><?= __('Instructors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instructors as $instructor): ?>
            <tr>
                <td><?= $this->Number->format($instructor->id) ?></td>
                <td><?= h($instructor->name) ?></td>
                <td><?= h($instructor->lastName) ?></td>
                <td><?= h($instructor->phone) ?></td>
                <td><?= $instructor->has('user') ? $this->Html->link($instructor->user->email, ['controller' => 'Users', 'action' => 'view', $instructor->user->id]) : '' ?></td>
                <td><?= h($instructor->created) ?></td>
                <td><?= h($instructor->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instructor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instructor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instructor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instructor->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
