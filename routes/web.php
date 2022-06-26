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




Route::get('/' , 'AdminController@index')->name('admin.home');

Route::get('users' , 'UserController@index')->name('users');

Route::get('calls' , 'CallController@index')->name('calls');

Route::get('call/user/{user}' , 'CallUserController@index')->name('calls.user');
