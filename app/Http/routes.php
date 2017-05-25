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
$api = app('Dingo\Api\Routing\Router');


$api->version('v1', function ($api) {
    $api->get('test', function (){


    });
});



Route::get('articles', 'WebController@listAction')->name('listAll');

Route::get('articles/{id}','WebController@showAction')->name('show_article');

Route::get('articles/edit/{id}','WebController@editAction');

Route::get('delete/{id}','WebController@deleteAction');

Route::get('create','WebController@createAction');

Route::put('articles/{id}', 'WebController@updateAction')->name('articles_update');

Route::post('articles', 'WebController@storeArticleAction');
Route::post('articles/{id}', 'WebController@storeCommentaryAction')->name('store_comment');



Route::get('testy','WebController@testAction');