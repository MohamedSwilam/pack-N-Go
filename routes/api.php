<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:api')->resource('users', 'UserController');

Route::post('login', 'LoginController@login');

Route::group(['prefix' => 'employee', 'middleware' => 'auth:api'], function () {
    Route::post('{id}', 'EmployeeController@update');
    Route::get('{id}', 'EmployeeController@show');
    Route::delete('{id}', 'EmployeeController@destroy');
    Route::resource('', 'EmployeeController');
});

Route::group(['prefix' => 'role', 'middleware' => 'auth:api'], function () {
    Route::post('{id}', 'RoleController@update');
    Route::get('{id}', 'RoleController@show');
    Route::delete('{id}', 'RoleController@destroy');
    Route::resource('', 'RoleController');
});

Route::middleware('auth:api')->get('permission', 'PermissionController@index');

Route::group(['prefix' => 'client', 'middleware' => 'auth:api'], function () {
    Route::post('{id}', 'ClientController@update');
    Route::get('{id}', 'ClientController@show');
    Route::delete('{id}', 'ClientController@destroy');
    Route::resource('', 'ClientController');
});