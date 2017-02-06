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

Auth::routes();

Route::get('/', 'PostsController@index');

Route::post('favorite/{post}', 'PostsController@favoritePost');
Route::post('unfavorite/{post}', 'PostsController@unFavoritePost');

Route::get('my_favorites', 'UsersController@myFavorites')->middleware('auth');
