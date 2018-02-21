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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', ['as' => 'posts', 'uses' => 'SiteController@index']);
Route::get('/', ['as' => 'posts', 'uses' => 'PostController@index']);
Route::get('unpublished', ['as' => 'posts.unpublished', 'uses' => 'PostController@unpublished']);

$router->resource('post', 'PostController');

Route::resource('photos', 'PhotoController');

Route::get('welcome', 'WelcomeController@index');
