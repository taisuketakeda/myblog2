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

Route::get('/','PostsController@index');
Route::get('/posts/{post}','PostsController@show')->where('post','[0-9]+');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/edit/{post}','PostsController@edit')->where('post','[0-9]+');
Route::patch('/posts/update/{post}','PostsController@update');
