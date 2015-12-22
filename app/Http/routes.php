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

Route::get('/blog', function () {
    return view('index');
});

Route::get('/blog/public/api/v1/employees/{id?}', 'Employees@index');
Route::post('/blog/public/api/v1/employees', 'Employees@store');
Route::post('/blog/public/api/v1/employees/{id}', 'Employees@update');
Route::delete('/blog/public/api/v1/employees/{id}', 'Employees@destroy');	