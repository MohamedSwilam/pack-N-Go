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


Route::get('package', 'PackageController@index');
//Route::group(['prefix' => 'package', 'middleware' => 'auth:api'], function () {
//    Route::post('{id}', 'PackageController@update');
//    Route::get('{id}', 'PackageController@show');
//    Route::delete('{id}', 'PackageController@destroy');
//    Route::resource('', 'PackageController');
//});

Route::group(['prefix' => 'booking', 'middleware' => 'auth:api'], function () {
    Route::post('{id}', 'BookingController@update');
    Route::get('{id}', 'BookingController@show');
    Route::delete('{id}', 'BookingController@destroy');
    Route::resource('', 'BookingController');
});

Route::group(['prefix' => 'post'], function () {
    Route::get('', 'PostController@index');
    Route::get('{id}', 'PostController@show');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('', 'PostController@store');
        Route::post('{id}', 'PostController@update');
        Route::delete('{id}', 'PostController@destroy');
    });
});
