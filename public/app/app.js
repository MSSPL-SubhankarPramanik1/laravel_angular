var app = angular.module('employeeRecords', [])
        .constant('API_URL', 'http://localhost:8000/blog/public/api/v1/');

//var app = angular.module('app', []);

app.config(function ($interpolateProvider) {

    $interpolateProvider.startSymbol('<%=');
    $interpolateProvider.endSymbol('%>');

});
