<!DOCTYPE html>
<html lang="en-US" ng-app="laravel_angular">
    <head>
        <title>@yield('title')</title>      

         <!-- Load Bootstrap CSS -->
        <!-- {!! Html::style('css/app.css') !!}
        {!! Html::style('css/style.css') !!} -->
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= asset('css/header.css') ?>" rel="stylesheet">

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        
        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/users.js') ?>"></script>        
    </head>    

    <body>
     <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                  <a href="javascript:void(0);" class="navbar-brand">Laravel5 AngularJS</a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="javascript:void(0);">Home</a></li>
                        <li><a href="<?php echo app_path() ?>">Blogs</a></li>
                        <!-- <li class="dropdown">
                            <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0);">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                                <li class="divider" role="separator"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="javascript:void(0);">Separated link</a></li>
                                <li><a href="javascript:void(0);">One more separated link</a></li>
                            </ul>
                        </li> -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><a href="javascript:void(0);">Default</a></li>
                        <li><a href="javascript:void(0);">Static top</a></li>
                        <li class="active"><a href="javascript:void(0);">Fixed top <span class="sr-only">(current)</span></a></li> -->
                        <li ng-controller="usersController" class="padding-10px-top">
                            <button type="button" class="btn btn-danger btn-sm" ng-click="confirmLogout(employee.id)"><span class="glyphicon glyphicon-off"></span> Logout </button>
                        </li> 
                    </ul>
                          
                </div>
          </div>
        </nav>

        <div class="container">
            @yield('content')
        </div><!-- /.container -->
    </body>
</html>