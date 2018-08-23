<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{family_name}/{given_name}/position','EmployeePositionController@get_position');
Route::post('/{family_name}/{given_name}/position','EmployeePositionController@post_position');
Route::get('/{position}/employees','EmployeePositionController@getposition_employees');
