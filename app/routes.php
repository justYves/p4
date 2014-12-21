<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'ListController@getIndex');
Route::get('/item/delete', 'ItemController@getDelete');
Route::post('/item/delete', 'ItemController@postDelete');
Route::post('/item/store', 'ItemController@store');
Route::get('/item/create/{id}', 'ItemController@getCreate');
Route::get('/item/edit/{id}', 'ItemController@getEdit');
Route::post('/item/edit', 'ItemController@postEdit');
Route::get('/signup', 'UserController@getSignup');
Route::post('/signup', 'UserController@postSignup');
Route::post('/login', 'UserController@postLogin');
Route::get('/login', 'UserController@getLogin');
Route::get('/logout', 'UserController@getLogout');


