<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Car'), ['action' => 'edit', $car->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Car'), ['action' => 'delete', $car->id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cars'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cars view large-9 medium-8 columns content">
    <h3><?= h($car->FullName) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Make') ?></th>
            <td><?= h($car->make) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($car->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trim') ?></th>
            <td><?= h($car->trim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transmission') ?></th>
            <td><?= h($car->transmission) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Drivetrain') ?></th>
            <td><?= h($car->drivetrain) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $car->has('customer') ? $this->Html->link($car->customer->name, ['controller' => 'Customers', 'action' => 'view', $car->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($car->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($car->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($car->modified) ?></td>
        </tr>
    </table>
    <div class="related"><h1><?= __('Uploaded Files') ?></h1>
            <!-- Table -->
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th >File</th>
                </tr>
                <?php if (!empty($car->files)):
                    foreach ($car->files as $file): ?>
                        <tr>
                            <td>
                                <?php echo $this->Html->image($file->path . $file->name, [
                                    "alt" => $file->name,
                                    "width" => "220px",
                                    "height" => "150px",
                                    'url' => ['controller' => 'Home', 'action' => 'view', $file->id]
                                ]);
                                ?>
                            </td>
                        </tr>
                    <?php endforeach;
                    else: ?>
                    <tr>
                        <td><?= __('No file(s) found......')?></td>
                    </tr>
                <?php endif; ?>
            </table>
    </div>
    <div class="related">
        <h4><?= __('Related Courses') ?></h4>
        <?php if (!empty($car->courses)): ?>
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
            <?php foreach ($car->courses as $courses): ?>
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
