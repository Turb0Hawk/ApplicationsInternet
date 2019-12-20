var app = angular.module('app', []);

app.controller('InstructorCRUDCtrl', ['$scope', 'InstructorCRUDService', function ($scope, InstructorCRUDService) {

    $scope.updateInstructor = function () {
        InstructorCRUDService.updateInstructor($scope.instructor.id, $scope.instructor.name, $scope.instructor.lastName, $scope.instructor.phone, $scope.instructor.user_id)
            .then(function success(response) {
                    $scope.message = 'Instructor data updated!';
                    $scope.errorMessage = '';
                },
                function error(response) {
                    $scope.errorMessage = 'Error updating instructor!';
                    $scope.message = '';
                });
    }

    $scope.getInstructor = function () {
        var id = $scope.instructor.id;
        InstructorCRUDService.getInstructor(id)
            .then(function success(response) {
                    $scope.instructor = response.data.data;
                    $scope.instructor.id = id;
                    $scope.message = '';
                    $scope.errorMessage = '';
                },
                function error(response) {
                    $scope.message = '';
                    if (response.status === 404) {
                        $scope.errorMessage = 'Instructor not found!';
                    } else {
                        $scope.errorMessage = "Error getting instructor!";
                    }
                });
    }

    $scope.addInstructor = function () {
        if ($scope.instructor != null && $scope.instructor.name && $scope.instructor.lastName && $scope.instructor.phone) {
            InstructorCRUDService.addInstructor($scope.instructor.id, $scope.instructor.name, $scope.instructor.lastName, $scope.instructor.phone, $scope.instructor.user_id)
                .then(function success(response) {
                        $scope.message = 'Instructor added!';
                        $scope.errorMessage = '';
                    },
                    function error(response) {
                        $scope.errorMessage = 'Error adding instructor!';
                        $scope.message = '';
                    });
        } else {
            $scope.errorMessage = 'Please enter a name!';
            $scope.message = '';
        }
    }

    $scope.deleteInstructor = function () {
        InstructorCRUDService.deleteInstructor($scope.instructor.id)
            .then(function success(response) {
                    $scope.message = 'Instructor deleted!';
                    $scope.instructor = null;
                    $scope.errorMessage = '';
                },
                function error(response) {
                    $scope.errorMessage = 'Error deleting instructor!';
                    $scope.message = '';
                })
    }

    $scope.getAllInstructors = function () {
        InstructorCRUDService.getAllInstructors()
            .then(function success(response) {
                    $scope.instructors = response.data.data;
                    $scope.message = '';
                    $scope.errorMessage = '';
                },
                function error(response) {
                    $scope.message = '';
                    $scope.errorMessage = 'Error getting instructors!';
                });
    }

}]);

app.service('InstructorCRUDService', ['$http', function ($http) {

    this.getInstructor = function getInstructor(instructorId) {
        return $http({
            method: 'GET',
            url: urlToRestApi + '/' + instructorId,
            headers: { 'X-Requested-With' : 'XMLHttpRequest',
                'Accept' : 'application/json'}
        });
    }

    this.addInstructor = function addInstructor(name, lastName, phone, user_id) {
        return $http({
            method: 'POST',
            url: urlToRestApi,
            data: {name: name, lastName: lastName, phone: phone, user_id: user_id},
            headers: { 'X-Requested-With' : 'XMLHttpRequest',
                'Accept' : 'application/json'}
        });
    }

    this.deleteInstructor = function deleteInstructor(id) {
        return $http({
            method: 'DELETE',
            url: urlToRestApi + '/' + id,
            headers: { 'X-Requested-With' : 'XMLHttpRequest',
                'Accept' : 'application/json'}
        })
    }

    this.updateInstructor = function updateInstructor(id, name, lastName, phone, user_id) {
        return $http({
            method: 'PATCH',
            url: urlToRestApi + '/' + id,
            data: {name: name, lastName: lastName, phone: phone, user_id: user_id},
            headers: { 'X-Requested-With' : 'XMLHttpRequest',
                'Accept' : 'application/json'}
        })
    }

    this.getAllInstructors = function getAllInstructors() {
        return $http({
            method: 'GET',
            url: urlToRestApi,
            headers: { 'X-Requested-With' : 'XMLHttpRequest',
                'Accept' : 'application/json'}
        });
    }

}]);


