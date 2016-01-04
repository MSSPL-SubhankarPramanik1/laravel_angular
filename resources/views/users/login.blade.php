<!DOCTYPE html>
<html lang="en-US" ng-app="laravel_angular">
    <head>
        <title>Laravel5 AngularJS</title>

        <!-- Load Bootstrap CSS -->
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= asset('css/header.css') ?>" rel="stylesheet">
        <link href="<?= asset('css/users.css') ?>" rel="stylesheet">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-align-center">Simple Laravel5 AngularJS Application</h2>
                    <div class="panel panel-login" ng-controller="usersController">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link" ng-click="toggle('login')">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link" ng-click="toggle('register')">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            {!! Html::ul($errors->all(), array('class'=>'alert-danger errors')) !!}
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;"> -->
                                    {!! Form::open(array('url' => 'laravel_angular/users/login','class'=>'form','id'=>'login-form','role'=>'form','style'=>'display: block;')) !!}
                                        <div class="form-group">
                                            <!-- <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value=""> -->
                                            {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'Email Address')) !!}
                                        </div>
                                        <div class="form-group">
                                            <!-- <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password"> -->
                                            {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Password')) !!}
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                            <label for="remember"> Remember Me</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- </form> -->
                                    {!! Form::close() !!}
                                    <!-- <form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;"> -->
                                    {!! Form::open(array('url' => 'laravel_angular/users/register','class'=>'form','id'=>'register-form','role'=>'form','style'=>'display: none;')) !!}
                                        <div class="form-group">
                                            <!-- <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value=""> -->
                                            {!! Form::text('name', null, array('class' => 'form-control','placeholder' => 'Name')) !!}

                                        </div>
                                        <div class="form-group">
                                            <!-- <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value=""> -->
                                            {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'Email Address')) !!}
                                        </div>
                                        <div class="form-group">
                                            <!-- <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password"> -->
                                            {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Password')) !!}
                                        </div>
                                        <div class="form-group">
                                            <!-- <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password"> -->
                                            {!! Form::password('password_confirmation',['class'=>'form-control','placeholder' => 'Confirm Password']) !!}

                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                </div>
                                            </div>
                                        </div>
                                    <!-- </form> -->
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
        
        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/users.js') ?>"></script> 
        
    </body>
</html>

 