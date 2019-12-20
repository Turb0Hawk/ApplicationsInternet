<?php
    $urlToLinkedListFilter = $this->Url->build([
        "controller" => "Makes",
        "action" => "getMakes",
        "_ext" => "json"
    ]);
    echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
    echo $this->Html->script('Cars/add', ['block' => 'scriptBottom']);
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cars form large-9 medium-8 columns content">
    <?= $this->Form->create($car) ?>
    <fieldset>
        <legend><?= __('Add Car') ?></legend>
        <div>
            Make:
            <select name="Make_id"
                    id="make-id"
                    ng-model="make"
                    ng-options="make.name for make in makes track by make.id"
            >
                <option value=''>Select</option>
            </select>
        </div>
        <div>
            Model:
            <select name="model_id"
                    id="model-id"
                    ng-disabled="!make"
                    ng-model="model"
                    ng-options="model.name for model in make.models track by model.id"
            >
                <option value=''>Select</option>
            </select>
        </div>
        <?php
            echo $this->Form->control('trim');
            echo $this->Form->control('transmission');
            echo $this->Form->control('drivetrain');
            echo $this->Form->control('customers._ids', ['options' => $customers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
