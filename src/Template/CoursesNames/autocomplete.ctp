<?php
    $urlToCoursesNamesAutocompleteJson = $this->Url->build([
        "controller" => "CoursesNames",
        "action" => "findCoursesNames",
        "_ext" => "json"
            ]);
    echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToCoursesNamesAutocompleteJson . '";', ['block' => true]);
    echo $this->Html->script('CoursesNames/autocomplete', ['block' => 'scriptBottom']);
?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Course Name'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<?= $this->Form->create('CoursesNames') ?>
<fieldset>
    <legend><?= __('Search Course names') ?></legend>
    <?php
    echo $this->Form->input('name', ['id' => 'autocomplete']);
    ?>
</fieldset>
<?= $this->Form->end() ?>
