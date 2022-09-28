<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index')->name('home');
Route::get('/homepage','HomeController@home')->name('home');
Route::get('/loginpage','HomeController@login')->name('login');
Route::get('/user_signup','HomeController@user_signup')->name('user_signup');
Route::post('/user','HomeController@save_user')->name('save_user');