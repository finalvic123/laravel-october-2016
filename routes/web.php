<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// User List
// Route::get('users', 'UserController@index'); 
Route::resource('users', 'UserController');

// About Us
Route::get('about-us', 'PageController@aboutUs');

// Contact us
Route::get('contact-us', 'PageController@contactUs');

// Route::get('/mahmud', function(){
// 	echo 'list of users';
// })->name('peserta');






