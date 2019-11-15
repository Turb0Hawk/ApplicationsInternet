<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($customer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($customer->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Civil Number') ?></th>
            <td><?= h($customer->civil_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street Name') ?></th>
            <td><?= h($customer->street_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($customer->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($customer->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customer->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($customer->users)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Password') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Role') ?></th>
                </tr>
                <?php foreach ($customer->users as $users): ?>
                    <tr>
                        <td><?= h($users->id) ?></td>
                        <td><?= h($users->email) ?></td>
                        <td><?= h($users->password) ?></td>
                        <td><?= h($users->created) ?></td>
                        <td><?= h($users->modified) ?></td>
                        <td><?= h($users->role) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cars') ?></h4>
        <?php if (!empty($customer->cars)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Make') ?></th>
                    <th scope="col"><?= __('Model') ?></th>
                    <th scope="col"><?= __('Trim') ?></th>
                    <th scope="col"><?= __('Transmission') ?></th>
                    <th scope="col"><?= __('Drivetrain') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                </tr>
                <?php foreach ($customer->cars as $cars): ?>
                    <tr>
                        <td><?= h($cars->make) ?></td>
                        <td><?= h($cars->model) ?></td>
                        <td><?= h($cars->trim) ?></td>
                        <td><?= h($cars->transmission) ?></td>
                        <td><?= h($cars->drivetrain) ?></td>
                        <td><?= h($cars->created) ?></td>
                        <td><?= h($cars->modified) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Courses') ?></h4>
        <?php if (!empty($customer->courses)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Length') ?></th>
                    <th scope="col"><?= __('Customer Id') ?></th>
                    <th scope="col"><?= __('Lesson Date') ?></th>
                    <th scope="col"><?= __('Instructor Id') ?></th>
                    <th scope="col"><?= __('Car Id') ?></th>
                    <th scope="col"><?= __('Lesson Status Ref Id') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                </tr>
                <?php foreach ($customer->courses as $courses): ?>
                    <tr>
                        <td><?= h($courses->name) ?></td>
                        <td><?= h($courses->length) ?></td>
                        <td><?= h($courses->customer_id) ?></td>
                        <td><?= h($courses->lesson_date) ?></td>
                        <td><?= h($courses->instructor_id) ?></td>
                        <td><?= h($courses->car_id) ?></td>
                        <td><?= h($courses->lesson_status_ref_id) ?></td>
                        <td><?= h($courses->created) ?></td>
                        <td><?= h($courses->modified) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
