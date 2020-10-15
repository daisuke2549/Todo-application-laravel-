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
Route::get('/', 'App\Http\Controllers\PostsController@index');
Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show')->where('post', '[0-9]+');
Route::get('/posts/create', 'App\Http\Controllers\PostsController@create');
Route::post('/posts', 'App\Http\Controllers\PostsController@store');