var app = angular.module('linkedlists', []);

app.controller('makesController', function ($scope, $http) {
    // l'url vient de add.ctp
    $http.get(urlToLinkedListFilter).then(function (response) {
        $scope.makes = response.data;
    });
});

