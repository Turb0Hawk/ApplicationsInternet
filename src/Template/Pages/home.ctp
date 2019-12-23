<div>
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Cars'), ['controller' => 'cars', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Files'), ['controller' => 'files', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Customers'), ['controller' => 'customers', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Instructors'), ['controller' => 'instructors', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Courses'), ['controller' => 'courses', 'action' => 'index']) ?></li>
        </ul>
    </nav>
    <div>
        <h1>
            Bienvenu sur le site de gestion de turbohawk racing school
        </h1>
    </div>
</div>
