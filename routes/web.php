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

use App\Http\Controllers\FollowingController;

Route::get('/', function () {
    return view('layout.front');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index');
Route::get('/post/{post}', 'PostController@show');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
Route::get('/post/{post}/edit', 'PostController@edit');
Route::put('/post/{post}', 'PostController@update');
Route::delete('/post/{post}', 'PostController@destroy');
Route::post('/like', 'PostController@like');
Route::delete('/unlike', 'PostController@unlike');


Route::get('/profile', 'ProfileController@index');
Route::get('/profile/{profile}', 'ProfileController@show');
Route::get('/profile/create', 'ProfileController@create');
Route::post('/profile', 'ProfileController@store');
Route::get('/profile/{profile}/edit', 'ProfileController@edit');
Route::put('/profile/{profile}', 'ProfileController@update');
Route::delete('/profile/{profile}', 'ProfileController@destroy');
Route::get('/users/cari', 'PostController@users');


Route::post('/comment', 'CommentController@store');
Route::put('/foto/{profile}', 'ProfileController@gantiDP');
Route::patch('/cover', 'ProfileController@gantiCover');

Route::post('/suka', 'CommentController@suka');
Route::delete('/unsuka', 'CommentController@unsuka');

Route::post('/profile/{user}', 'FollowingController@store')->name('following.store');
Route::get('/following', 'FollowingController@following')->name('profile.following');
Route::get('/followers', 'FollowingController@followers')->name('profile.followers');
Route::get('/following/{user}', 'FollowingController@followingid')->name('profile.followingid');
Route::get('/followers/{user}', 'FollowingController@followersid')->name('profile.followersid');

Route::post('/cetak/quotes', 'PostController@pdf');