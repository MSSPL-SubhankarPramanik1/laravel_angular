<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


$project_name = '/laravel_angular';		//'laravel_angular'

Route::get($project_name, function () {
    //return view('index');
    return view('employees');
});

Route::get($project_name.'/public/api/v1/employees/{id?}', 'Employees@index');
Route::post($project_name.'/public/api/v1/employees', 'Employees@store');
Route::post($project_name.'/public/api/v1/employees/{id}', 'Employees@update');
Route::delete($project_name.'/public/api/v1/employees/{id}', 'Employees@destroy');	




/* User Authentication */
Route::get($project_name.'/users/login', 'Auth\AuthController@getLogin');
Route::post($project_name.'/users/login', 'Auth\AuthController@postLogin');
Route::get($project_name.'/users/logout', 'Auth\AuthController@getLogout');

Route::get($project_name.'/users/register', 'Auth\AuthController@getRegister');
Route::post($project_name.'/users/register', 'Auth\AuthController@postRegister');


/* Authenticated users */
Route::group(['middleware' => 'auth'], function() {
	$project_name = '/laravel_angular';		//'laravel_angular'

    Route::get($project_name.'/users/dashboard', array('as'=>'dashboard', function() {
		return View('users.dashboard');
	}));

	Route::get($project_name.'/users/employees', array('as'=>'employees', function() {
		return view('employees.list');
	}));
});