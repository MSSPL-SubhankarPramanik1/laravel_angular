$(function() {
    $('#login-form-link').click(function(e) {
        //$(".alert-danger").removeClass().html('');
        $("ul").empty();
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("ul").empty();
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
});

app.controller('usersController', function($scope, $http, API_URL) {
    //delete record
    $scope.confirmLogout = function(id) {
        var isConfirmLogout = confirm('Are you sure you want logout?');
        if (isConfirmLogout) {
            $http({
                method: 'GET',
                url: '/laravel_angular/users/logout/'
            }).
            success(function(data) {
                //console.log(data);
                location.reload();
            }).
            error(function(data) {
                console.log(data);
                alert('Unable to logout');
            });
        } else {
            return false;
        }
    }
});