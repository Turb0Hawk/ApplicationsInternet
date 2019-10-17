<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\File $file
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit File'), ['action' => 'edit', $file->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete File'), ['action' => 'delete', $file->id], ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="files view large-9 medium-8 columns content">
    <h3><?= h($file->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($file->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($file->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($file->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($file->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($file->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $file->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cars') ?></h4>
        <?php if (!empty($files->cars)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Make') ?></th>
                    <th scope="col"><?= __('Model') ?></th>
                    <th scope="col"><?= __('Trim') ?></th>
                    <th scope="col"><?= __('Transmission') ?></th>
                    <th scope="col"><?= __('Drivetrain') ?></th>
                    <th scope="col"><?= __('Customer Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($files->cars as $cars): ?>
                    <tr>
                        <td><?= h($cars->id) ?></td>
                        <td><?= h($cars->make) ?></td>
                        <td><?= h($cars->model) ?></td>
                        <td><?= h($cars->trim) ?></td>
                        <td><?= h($cars->transmission) ?></td>
                        <td><?= h($cars->drivetrain) ?></td>
                        <td><?= h($cars->customer_id) ?></td>
                        <td><?= h($cars->created) ?></td>
                        <td><?= h($cars->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Cars', 'action' => 'view', $cars->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Cars', 'action' => 'edit', $cars->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cars', 'action' => 'delete', $cars->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cars->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
