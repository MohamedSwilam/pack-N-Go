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

Route::view('/', 'pages.home')->name('home');
Route::view('/packages-list', 'pages.packages_list')->name('package_list');
Route::view('/package-details', 'pages.package_details')->name('package_details');
Route::view('/blog', 'pages.blog', [
    'posts' => \App\Post::paginate(10)
])->name('blog');
Route::view('/about', 'pages.about')->name('about');
Route::view('/create-package', 'pages.create_package')->name('create_package');
Route::view('/contact-us', 'pages.contact_us')->name('contact_us');
Route::get('/dashboard', 'ApplicationController')->where('any', '.*');
Route::get('/dashboard/{any}', 'ApplicationController')->where('any', '.*');
