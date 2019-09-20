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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::POST('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

});

Route::get('events', 'EventController@index')->name('events.index');
Route::Post('events', 'EventController@addEvent')->name('events.add');

Route::get('/addevent','EventController@display');

Route::get('/displaydata', 'EventController@show');

Route::get('/deleteevent', 'EventController@show');

Route::resource('/events','EventController');



Route::get('/users', 'UserController@index');

Route::get('/userphoto', 'UserController@photo');


Route::get('/profile', 'UserProfileController@index');



/*
Route::post('/register', 'HomeController@store')->name('register');
*/






