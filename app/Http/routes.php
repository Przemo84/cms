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



Route::get('/article', 'WebController@listAction');

Route::get('/article/{id}','WebController@readAction');

Route::get('/article/edit/{id}','WebController@editAction');

