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
Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostsController@edit');
Route::patch('/posts/{post}', 'App\Http\Controllers\PostsController@update');
Route::delete('/posts/{post}', 'App\Http\Controllers\PostsController@destroy');
Route::post('/posts/{post}/comments', 'App\Http\Controllers\CommentsController@store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
