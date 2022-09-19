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

// Movies (Homepage)
Route::get('/', 'HomeController@index')->name('movies.index');

// Movies | Single Movie
Route::get('/movies/{id}', 'HomeController@show')->name('movies.show');