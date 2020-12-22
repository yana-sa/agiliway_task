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

Route::get('/', '\App\Http\Controllers\ArticleController@index');
Route::get('{id}', '\App\Http\Controllers\ArticleController@show');

Route::post('create', '\App\Http\Controllers\ArticleController@store');
Route::get('create', '\App\Http\Controllers\ArticleController@create');

Route::post('edit/{id}', '\App\Http\Controllers\ArticleController@update');
Route::get('edit/{id}', '\App\Http\Controllers\ArticleController@edit');

Route::get('delete/{id}', '\App\Http\Controllers\ArticleController@destroy');
