<div>
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Courses'), ['controller' => 'courses', 'action' => 'index']) ?></li>
        </ul>
    </nav>
</div>
<div class="about index large-9 medium-8 columns content">
    <p> David Ringuet</p><br/>
    <?php echo __( 'Cours') . ': 420-5B7 MO Applications internet.'?>
    <?php echo  '<p> ' . __('Session') . ' : Automne 2019, Collège Montmorency<p>' ?>
    <?php echo  '<p> ' . __('Diagrame de la base de donnée en utilisation') . '<p>' ?>
    <img src="Contenu/images/db.png"><br/>
    <a href="http://www.databaseanswers.org/data_models/driving_school/index.htm"> Diagrame source de la base de donnée
        en utilisation</a><br/>
    <img src="http://www.databaseanswers.org/data_models/driving_school/images/driving_school_dezign.gif"><br/>
</div>
