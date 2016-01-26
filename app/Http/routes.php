<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'BlogController@index'); /*/代表根目錄 通常是首頁*/
Route::get('blog/{slug}', 'BlogController@showPost');
Route::get('post', 'BlogController@addPost');
Route::get('blog/{slug}/edit', 'BlogController@editPost');
Route::put('post/{id}', 'BlogController@update');
Route::post('post', 'BlogController@store');
Route::delete('blog/{id}', 'BlogController@deletePost');

//game list
Route::get('/game','GameController@index');
Route::get('/game/create','GameController@create');
Route::post('/game/store','GameController@store');
