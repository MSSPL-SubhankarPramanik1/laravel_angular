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
                                    <a href="javascript:void(0);" class="form-link active" id="login-form-link" ng-click="toggle('login')">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="javascript:void(0);" class="form-link " id="register-form-link" ng-click="toggle('register')">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                            {!! Html::ul($errors->all(), array('class'=>'alert-danger errors')) !!}
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- <form id="login-form" role="form" style="display: block;"> -->
                                    {!! Form::open(array('name'=>'frmLogin','url'=>'laravel_angular/users/login','class'=>'form form-tab','id'=>'login-form','role'=>'form','style'=>'display: block;')) !!}
                                        <div class="form-group">
                                            {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'Email Address','ng-model'=>'users.email','ng-required'=>'true')) !!}
                                            <span class="help-inline" ng-show="frmLogin.email.$invalid && frmLogin.email.$touched">Valid Email field is required</span>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Password','ng-model'=>'users.password','ng-required'=>'true')) !!}
                                            <span class="help-inline" ng-show="frmLogin.password.$invalid && frmLogin.password.$touched">Password field is required</span>
                                        </div>
                                        <!-- <div class="form-group text-center">
                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                            <label for="remember"> Remember Me</label>
                                        </div> -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In" ng-click="login()" ng-disabled="frmLogin.$invalid">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- </form> -->
                                    {!! Form::close() !!}

                                    {!! Form::open(array('name'=>'frmRegister','url'=>'laravel_angular/users/register','class'=>'form form-tab','id'=>'register-form','role'=>'form','style'=>'display: none;','novalidate'=>'')) !!}
                                        <div class="form-group">
                                            {!! Form::text('name', null, array('class'=>'form-control','placeholder'=> 'Fullname','ng-model'=>'users.name','ng-required'=>'true')) !!}
                                            <span class="help-inline" ng-show="frmRegister.name.$invalid && frmRegister.name.$touched">Fullname field is required</span>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::text('email', null, array('class'=>'form-control','placeholder'=>'Email Address','ng-model'=>'users.email','ng-required'=>'true')) !!}
                                            <span class="help-inline" ng-show="frmRegister.email.$invalid && frmRegister.email.$touched">Valid Email field is required</span>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::password('password', array('class' => 'form-control','placeholder' => 'Password','ng-model'=>'users.password','ng-required'=>'true')) !!}
                                            <span class="help-inline" ng-show="frmRegister.password.$invalid && frmRegister.password.$touched">Password field is required</span>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::password('password_confirmation',['class'=>'form-control','placeholder' => 'Confirm Password','ng-model'=>'users.password_confirmation','ng-required'=>'true']) !!}
                                            <span class="help-inline" ng-show="frmRegister.password_confirmation.$invalid && frmRegister.password_confirmation.$touched">Confirm Password field is required</span>
                                        </div>
                                        <!-- <div class="form-group">  
                                            {!! Form::text('contact_number', null, array('class' => 'form-control','placeholder' => 'Contact number')) !!}                             
                                        </div> 
                                        <div class="form-group">                                      
                                            {!! Form::text('position', null, array('class' => 'form-control','placeholder' => 'Position')) !!}
                                        </div> -->                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" ng-disabled="frmRegister.$invalid" value="Register Now">                                                    
                                                </div>
                                            </div>
                                        </div>
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

 