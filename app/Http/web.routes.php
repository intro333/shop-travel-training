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

Route::group(['prefix' => 'products'], function () {
    Route::get('/', ['as' => 'products.index', 'uses' => 'ProductsController@index']);
    Route::get('/collection', ['as' => 'products.collection', 'uses' => 'ProductsController@collection']);
});
