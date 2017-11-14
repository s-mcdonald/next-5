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

Route::middleware(['web'])->group(function() {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/Race/{race}', 'RaceController@index')->name('race');
    Route::get('/api/timer', 'ApiController@getTime');
    Route::post('/api/nextFive', 'ApiController@nextFive');

});


