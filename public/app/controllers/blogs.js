app.controller('blogsController', function($scope, $http, API_URL) {

	//retrieve blogs listing from API
    $http.get(API_URL + "blogs")
    .success(function(response) {
        console.log(response);
        $scope.blogs = response;
    });
    
});