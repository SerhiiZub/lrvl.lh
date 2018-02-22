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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', ['as' => 'posts', 'uses' => 'SiteController@index']);
//Route::get('/', ['as' => 'posts', 'uses' => 'PostController@index']);

Route::get('/',  'PostController@index')->name('home');
Route::get('/posts',  'PostController@index')->name('posts');
Route::get('unpublished', ['as' => 'posts.unpublished', 'uses' => 'PostController@unpublished']);

$router->resource('post', 'PostController');

Route::resource('photos', 'PhotoController');

Route::get('welcome', 'WelcomeController@index');

Auth::routes();

Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function() {
    Route::get('register', 'AuthController@getRegister')->name('register');
    Route::post('register', 'AuthController@postRegister');
    Route::get('activate','AuthController@activate');
    Route::get('login','AuthController@getLogin')->name('login');
    Route::post('login','AuthController@postLogin');
});

//Route::group(['namespace' => 'Front'], function () {
//    Route::get('/contact', 'ContactController')->name('contact');
//    Route::get('/about', 'AboutController')->name('about');
//});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/user','UserController@index')->name('user');
});
//Route::get('/user','UserController@index')->name('user')->middleware('auth');
//Route::get('user','UserController@index')->middleware('auth');



Route::get('/home', 'PostController@index');
//Route::get('/', 'PostController@index');
