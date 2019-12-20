<?php
$urlToRestApi = $this->Url->build([
    'prefix' => 'api',
    'controller' => 'Instructors'], true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Instructors/index', ['block' => 'scriptBottom']);
?>

<div  ng-app="app" ng-controller="InstructorCRUDCtrl">
    <table>
        <tr>
            <td width="100">ID:</td>
            <td><input type="text" id="id" ng-model="instructor.id" /></td>
        </tr>
        <tr>
            <td width="100">Name:</td>
            <td><input type="text" id="name" ng-model="instructor.name" /></td>
        </tr>
        <tr>
            <td width="100">Last name:</td>
            <td><input type="text" id="lastName" ng-model="instructor.lastName" /></td>
        </tr>
        <tr>
            <td width="100">Phone number:</td>
            <td><input type="text" id="phone" ng-model="instructor.phone" /></td>
        </tr>
        <tr>
            <td width="100">User id:</td>
            <td><input type="text" id="user_id" ng-model="instructor.user_id" /></td>
        </tr>
    </table>
    <br /> <br />
    <a ng-click="getInstructor(instructor.id)">Get Instructor</a>
    <a ng-click="updateInstructor(instructor.id, instructor.name, instructor.lastName, instructor.phone, instructor.user_id)">Update Instructor</a>
    <a ng-click="addInstructor(instructor.name, instructor.lastName, instructor.phone, instructor.user_id)">Add Instructor</a>
    <a ng-click="deleteInstructor(instructor.id)">Delete Instructor</a>

    <br /> <br />
    <p style="color: green">{{message}}</p>
    <p style="color: red">{{errorMessage}}</p>

    <br />
    <br />
    <a ng-click="getAllInstructors()">Get all Instructors</a><br />
    <br /> <br />

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Phone number</th>
            <th>User id</th>
            <th>Actions</th>
        </tr>

        <tbody ng-repeat="instructor in instructors">
            <tr>
                <td>{{instructor.id}}</td>
                <td>{{instructor.name}}</td>
                <td>{{instructor.lastName}}</td>
                <td>{{instructor.phone}}</td>
                <td>{{instructor.user_id}}</td>
                <td>
                    <a ng-click="deleteInstructor(instructor.id)">Delete</a>
                    <a ng-click="getInstructor(instructor.id)">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
<!--     <pre ng-show='instructors'>{{instructors | json }}</pre>-->
</div>

