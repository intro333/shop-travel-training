<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Здесь буду формироваться роуты для MongoDB
|
*/
Route::group(['prefix' => 'mongo'], function () {
    Route::get('/get-order', 'Mongo\OrderController@index');
});