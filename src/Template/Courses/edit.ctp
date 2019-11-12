<?php
    $urlToCoursesNamesAutocompleteJson = $this->Url->build([
        "controller" => "CoursesNames",
        "action" => "findCoursesNames",
        "_ext" => "json"
    ]);
    /**
     * @var \App\View\AppView $this
     * @var \App\Model\Entity\Course $course
     */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $course->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Instructors'), ['controller' => 'Instructors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instructor'), ['controller' => 'Instructors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cars'), ['controller' => 'Cars', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car'), ['controller' => 'Cars', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lesson Status Refs'), ['controller' => 'LessonStatusRefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lesson Status Ref'), ['controller' => 'LessonStatusRefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courses form large-9 medium-8 columns content">
    <?= $this->Form->create($course) ?>
    <fieldset>
        <legend><?= __('Edit Course') ?></legend>
        <?php
            echo $this->Form->control('name', ['id' => 'autocomplete']);
            echo $this->Form->control('length');
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('lesson_date', ['empty' => true]);
            echo $this->Form->control('instructor_id', ['options' => $instructors]);
            echo $this->Form->control('car_id', ['options' => $cars]);
            echo $this->Form->control('lesson_status_ref_id', ['options' => $lessonStatusRefs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
