<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Здесь буду формироваться роуты для React JS
|
*/
Route::group(['prefix' => 'react'], function () {
    Route::get('/first-template', function () {
        return view('react.first-template');
    });
    Route::get('/contacts-search', function () {
        return view('react.contacts-search');
    });
    Route::get('/compil', function () {
        return view('react.compil');
    });
});