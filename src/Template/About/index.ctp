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
    <?php echo  '<p> ' . __('Session') . ' : Automne 2019, Collège Montmorency<p>' ?>
    <?php echo  '<h2> ' . __('Session') . ' : Automne 2019, Collège Montmorency</h2>' ?>
    <?php
        echo '<h2>' . "Intéret de l'application" . '</h2>' .
         "L'intéret de cette application est de pouvoir gérer une école de conduite de course ou les clients peuvent enregistrer leur propres voitures. Les utilisateurs peuvent se connecter pour ensuite gérer
         l'école. Ce site sert d'outil interne pour aider la gestion et n'est pas conçut pour être exposé au public. Malgré tout, l'application est conçut avec des mesures de sécurit. en place."
    ?>
    <?php echo '<h2>' . "Guide d'utilisation" . '</h2>' ?>
    <?php echo '<p>' . "Voici les différentes interactions possibles avec les pages." . '</p>' ?>
    <?php echo
        '<ul>' .
            '<li>' .
                "Users: il est possible de créer et de gérer des utilisateurs au travers des interfaces dédiés à cela. 
                Les utilisateurs peuvent créer et enregistrer leur compte par eux-mêmes sur la page de connection.
                Il est aussi possible d'ajouter manuellement les utilisateurs mais cette méthode est fortement déconseillé. 
                À partir de la page index, on peut visualiser tout les utilisateurs. Pour chaqu'un des utilisateurs il est possible de voir plus de détails avec 'View', modifier l'utilisateur avec 'Edit' et
                supprimer l'utilisateur avec 'Delete'." .
            '</li>' .
            '<li>' .
                "Cars: il est possible de créer et de gérer des voitures au travers des interfaces dédiés à cela. 
                À partir de la page index on peut visualiser tout les voitures. À partir de la page 'New Car', on peut ajouter de nouveaux véhicules. 
                La marque et le modèle sont une liste déroulante et donc on peut seulement ajouter des voitures qui sont dans les marques/modèles supportés.
                La garniture de la voiture, transmission et type de motricitée est spécifiable par écrit. Ensuite il faut associer le vehicule à un client.
                Avec l'action view il est possible de consulter les détails d'une voiture en particulier ainsi que les fichiers et les cours reliés à la voiture" .
            '</li>' .
            '<li>' .
                "Files: il est possible de charger des fichiers, de les modifier et de les lier à des voitures.
                Pour charger des fichiers, on peut utiliser la page new File pour ajouter et lier le fichier  d'un seul coup. 
                Sinon, il est possible d'utiliser un glisser cliquer sur la page index, Dans ce cas, il est ensuite nécessaire d'aller modifier les paramètres du fichier pour l'assigner à des voitures.
                Avec la page index on peut visualiser tout les images et rajouter des nouvelles images via le glisser-cliquer. Pour faire cela, il faut soi glisser le fichier sur le texte ou cliquer dessus pour faire apparaitre un navigateur de fichiers et selectionner le fichier à charger." .
            '</li>' .
            '<li>' .
                "Customers: il est possible de créer et de gérer des clients. Grace à la page index, on peut visualiser tout les clients présentement enregistrés dans la base de donnée.
                Avec la page new, il est possible de rajouter un client dans la base. Notez quil est nécessaire de lier un compte d'utilisateur à un client.
                Ensuite, depuis l'index, on peut modifier et supprimer le client ainsi que visualiser plus de détails sur celui-ci." .
            '</li>' .
            '<li>' .
                "Instructors: il est possible de créer et de gérer des instructeurs de cours. La création et gestion d'instructeurs se fait à l'aide d'une interface monopage CRUD.
                Par défaut la page charge les instructeurs dans une liste. Pour chaqu'un, il y as la possibilité de les modifier ou de les supprimer. 
                Pour les modifier il est possible de cliquer sur le bouton modifier, ou de les rechercher par leur id en utilisant la boite 'ID' et en appuyant sur 'Get Instructor'. 
                Ensuite on change les informations comme qu'on le veut et on confirme le tout en appuyant sur 'Update Instructor'. Pour ajouter un instructeur il suffit de remplir tout les champs sauf ID et d'a^ppuyer sur 'Add Instructor'..
                 Finalement pour supprimer un instructeur il est possible d'utiliser le bouton dans le tableau des instructeurs ou d'entrer l'id de l'instructeur dans le champ ID et d'appuyer sur 'Delete Instructor'." .
            '</li>' .
            '<li>' .
                "Courses: il est possible de créer et de gérer des cours de conduite. 
                Sur la page index, on peut visualiser tout les cours de conduites. Pour chaqu'un de ces derniers, il est possible de les voir en plus de détails, les modifier et de les supprimer.
                Avec la page New Course, il est possible d'ajouter un nouveau cours en remplissant tout les champs requis et en appuyant sur submit.
                " .
            '</li>' .
        '</ul>'
    ?>
    <?php echo  '<h2> ' . __('Diagrame de la base de donnée en utilisation') . '</h2>' ?>
    <?= $this->Html->image('db_schema.png', ['alt' => 'Schema de la BD']) ?>
    <a href="http://www.databaseanswers.org/data_models/driving_school/index.htm"> Diagrame source de la base de donnée
        en utilisation</a><br/>
    <?= $this->Html->image('db_schema.png', ['alt' => 'Schema de la BD']) ?>
    <a href="http://www.databaseanswers.org/data_models/driving_school/index.htm"> Diagrame source de la base de donnée
        en utilisation</a><br/>
    <img src="http://www.databaseanswers.org/data_models/driving_school/images/driving_school_dezign.gif"><br/>
</div>
