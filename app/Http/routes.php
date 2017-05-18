<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('articles', 'WebController@listAction');
Route::post('articles', 'WebController@storeAction');

Route::get('articles/{article}','WebController@showAction');

Route::get('articles/edit/{id}','WebController@editAction');

Route::get('delete/{id}','WebController@deleteAction');

Route::get('create','WebController@createAction');

Route::get('test','WebController@testAction');

