<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursesName $coursesName
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coursesName->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coursesName->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Courses Names'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="coursesNames form large-9 medium-8 columns content">
    <?= $this->Form->create($coursesName) ?>
    <fieldset>
        <legend><?= __('Edit Courses Name') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
