<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LessonSatusRef[]|\Cake\Collection\CollectionInterface $lessonSatusRefs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lesson Satus Ref'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lessonSatusRefs index large-9 medium-8 columns content">
    <h3><?= __('Lesson Satus Refs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lesson_status_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lessonSatusRefs as $lessonSatusRef): ?>
            <tr>
                <td><?= $this->Number->format($lessonSatusRef->id) ?></td>
                <td><?= $this->Number->format($lessonSatusRef->lesson_status_description) ?></td>
                <td><?= h($lessonSatusRef->created) ?></td>
                <td><?= h($lessonSatusRef->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lessonSatusRef->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lessonSatusRef->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lessonSatusRef->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lessonSatusRef->id)]) ?>
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
