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
})->name('home');

Route::get('/ipsum/create', 'IpsumController@create')->name('ipsum.create');

Route::post('/ipsum', 'IpsumController@store')->name('ipsum.store');

Route::get('/ipsum/show/{paragraphs}', 'IpsumController@show')->name('ipsum.show');


Route::get('/users/create', 'UserController@create')->name('user.create');

Route::post('/users', 'UserController@store')->name('user.store');
