<?php
/**
 * Created by PhpStorm.
 * User: serg
 * Date: 22.02.18
 * Time: 17:01
 */
use Illuminate\Support\Facades\Route;
//var_dump(123);die;
//Route::group(['namespace' => 'Front'], function () {
    Route::get('/contact', 'ContactController')->name('contact');
    Route::get('/about', 'AboutController')->name('about');
    Route::get('/service', 'ServiceController')->name('service');
//});