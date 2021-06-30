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

Route::resource('/', 'MainPageController')->middleware('auth');

Route::resource('/mainpage', 'MainPageController')->middleware('auth');

Route::resource('/showall', 'ShowallController')->middleware('auth');

Route::resource('/filter', 'FilterController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
