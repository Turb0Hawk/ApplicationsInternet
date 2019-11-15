<div>
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Courses'), ['controller' => 'courses', 'action' => 'index']) ?></li>
        </ul>
    </nav>
</div>
<div class="about index large-9 medium-8 columns content">
    <h1> David Ringuet</h1><br/>
    <?php echo __( 'Cours') . ': 420-5B7 MO Applications internet.'?>
    <?php echo  '<h2> ' . __('Session') . ' : Automne 2019, Collège Montmorency</h2>' ?>
    <?php echo '<h2>' . "Guide d'utilisation" . '</h2>' ?>
    <?php echo '<p>' . "Voici les différentes intérractions possibles avec les pages." . '</p>' ?>
    <?php echo '<ul>' .
                     '<li>' . "Users: il est possible de créer et de gérer des utilisateurs au travers des interfaces dédiés à cela" . '</li>' .
                     '<li>' . "Cars: il est possible de créer et de gérer des voitures au travers des interfaces dédiés à cela" . '</li>' .
                     '<li>' . "Files: il est possible de charger des fichiers, de les modifier et de les lier à des voitures au travers des interfaces dédiés à cela" . '</li>' .
                     '<li>' . "Customers: il est possible de créer et de gérer des clients au travers des interfaces dédiés à cela" . '</li>' .
                     '<li>' . "Instructors: il est possible de créer et de gérer des instructeurs de cours au travers des interfaces dédiés à cela" . '</li>' .
                     '<li>' . "Courses: il est possible de créer et de gérer des cours de conduite au travers des interfaces dédiés à cela" . '</li>' .
                '</ul>'
    ?>
    <?php echo  '<h2> ' . __('Diagrame de la base de donnée en utilisation') . '</h2>' ?>
    <?= $this->Html->image('db_schema.png', ['alt' => 'Schema de la BD']) ?>
    <a href="http://www.databaseanswers.org/data_models/driving_school/index.htm"> Diagrame source de la base de donnée
        en utilisation</a><br/>
    <img src="http://www.databaseanswers.org/data_models/driving_school/images/driving_school_dezign.gif"><br/>
</div>
