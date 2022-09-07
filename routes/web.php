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

Route::get('/', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::middleware('auth-check')->group(function () {
    Route::get('posts', 'PostController@index')->name('posts');
    Route::get('user', 'AuthController@index')->name('user');
    Route::get('history/{id}', 'AuthController@history')->name('history');
});

Route::get('category', 'CategoryController@index')->name('categories.index');
Route::get('create', 'CategoryController@create')->name('categories.create');
Route::post('store', 'CategoryController@store')->name('categories.store');

Route::get('post', 'PostController@create');
