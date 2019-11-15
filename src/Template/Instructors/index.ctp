<?php
$urlToRestApi = $this->Url->build('/api/instructors', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Instructors/index', ['block' => 'scriptBottom']);
?>

<div class="container">
    <div class="row">
        <div class="panel panel-default instructors-content">
            <div class="panel-heading">Instructors <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add Instructor</h2>
                <form class="form" id="instructorAddForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName"/>
                    </div>
                    <div class="form-group">
                        <label>Telephone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone"/>
                    </div>
                    <div class="form-group">
                        <label>User profile</label>
                        <input type="text" class="form-control" name="user_id" id="user_id"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="instructorAction('add')">Add Instructor</a>
                    <!-- input type="submit" class="btn btn-success" id="addButton" value="Add Instructor" -->
                </form>
            </div>
            <div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit Instructor</h2>
                <form class="form" id="instructorEditForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="nameEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="lastName" id="lastNameEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Telephone Number</label>
                        <input type="text" class="form-control" name="phone" id="phoneEdit"/>
                    </div>
                    <div class="form-group">
                        <label>User profile</label>
                        <input type="text" class="form-control" name="user_id" id="user_idEdit"/>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="instructorAction('edit')">Update Instructor</a>
                    <!-- input type="submit" class="btn btn-success" id="editButton" value="Update Instructor" -->
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Telephone Number</th>
                    <th>Profile id</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="instructorData">
                <?php
                $count = 0;
                foreach ($instructors as $instructor): $count++;
                    ?>
                    <tr>
                        <td><?php echo '#' . $count; ?></td>
                        <td><?php echo $instructor['name']; ?></td>
                        <td><?php echo $instructor['lastName']; ?></td>
                        <td><?php echo $instructor['phone']; ?></td>
                        <td><?php echo $instructor['user_id']; ?></td>
                        <td>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editInstructor('<?php echo $instructor['id']; ?>')"></a>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?') ? instructorAction('delete', '<?php echo $instructor['id']; ?>') : false;"></a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr><td colspan="5">No instructor(s) found......</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
