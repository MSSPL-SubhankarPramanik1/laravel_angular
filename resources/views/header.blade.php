<!DOCTYPE html>
<html lang="en-US" ng-app="laravel_angular">
    <head>
        <title>@yield('title')</title>		

         <!-- Load Bootstrap CSS -->
        <!-- {!! Html::style('css/app.css') !!}
        {!! Html::style('css/style.css') !!} -->
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        
        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/users.js') ?>"></script>        
    </head>
    
    <!-- <nav class="navbar navbar-default navbar-fixed-top"> -->
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container">
            <div class="navbar-header">              
                <a class="navbar-brand" href="#">Laravel Aangular</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Item</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
        <div ng-controller="usersController">
            <button type="button" class="btn btn-danger btn-sm" ng-click="confirmLogout(employee.id)"><span class="glyphicon glyphicon-trash"></span> Logout </button>
        </div>

    </nav>

    <body>
        <div class="container">
            @yield('content')
        </div><!-- /.container -->
    </body>
</html>