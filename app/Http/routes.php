<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| and give it the controller to call when that URI is requested.
| It's a breeze. Simply tell Laravel the URIs it should respond to
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $api->group(['namespace' => 'App\Api\Http\Controllers'], function ($api) {

        $api->get('articles','ArticlesController@indexAction');
        $api->get('articles/{id}','ArticlesController@showAction');
        $api->delete('articles/{id}','ArticlesController@deleteAction');
        $api->put('articles/{id}', 'ArticlesController@updateAction');
        $api->post('articles', 'ArticlesController@createAction');

    });
});


Route::get('/', function (){
   return view('welcome');
});

Route::get('articles', 'WebController@listAction')->name('listAll');

Route::get('articles/{id}','WebController@showAction')->name('show_article');

Route::get('articles/edit/{id}','WebController@editAction');

Route::get('delete/{id}','WebController@deleteAction')->name('delete_action');

Route::get('create','WebController@createAction');

Route::put('articles/{id}', 'WebController@updateAction')->name('articles_update');

Route::post('articles', 'WebController@storeArticleAction');
Route::post('articles/{id}', 'WebController@storeCommentaryAction')->name('store_comment');


Route::get('testy','WebController@testAction');

