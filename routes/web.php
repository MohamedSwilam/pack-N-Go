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

//Route::get('/{any}', 'ApplicationController')->where('any', '.*');

Route::get('/', 'Web\HomeController@index')->name('home');
Route::get('/package', 'Web\PackageController@index')->name('package_list');
Route::get('/package/filter', 'Web\PackageController@filter')->name('package_list_filter');
Route::get('/package/{id}', 'Web\PackageController@show')->name('package_details');

Route::get('/blog', 'Web\BlogController@index')->name('blog');

Route::view('about', 'pages.about')->name('about');
Route::get('create-package', 'Web\CustomPackageController@create')->name('create_package');
Route::view('contact-us', 'pages.contact_us')->name('contact_us');
Route::get('insurance', 'Web\InsuranceController@view')->name('insurance');
Route::get('visa', 'Web\VisaController@index')->name('visa');
Route::get('/visa/{id}', 'Web\VisaController@show')->name('visa_details');
Route::get('dashboard', 'ApplicationController')->where('any', '.*');
Route::get('dashboard/{any}', 'ApplicationController')->where('any', '.*');

Route::post('insurance', 'Web\InsuranceController@store');
Route::post('booking', 'Web\BookingController@store');
Route::post('contact-us', 'Web\ContactUsController@store');
Route::post('visa-demand', 'Web\VisaDemandController@store');
Route::view('submitted', 'pages.submitted')->name('submitted');
