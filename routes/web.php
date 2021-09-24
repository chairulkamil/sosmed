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

Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
Route::get('/post/{post}/edit', 'PostController@edit');
Route::patch('/post/{post}', 'PostController@update');
Route::delete('/post/{post}', 'PostController@destroy');

Route::get('/profile', 'ProfileController@index');
Route::get('/profile/create', 'ProfileController@create');
Route::post('/profile', 'ProfileController@store');
Route::get('/profile/{profile}/edit', 'ProfileController@edit');
Route::patch('/profile/{profile}', 'ProfileController@update');
Route::delete('/profile/{profile}', 'ProfileController@destroy');
