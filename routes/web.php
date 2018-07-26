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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/writenews', 'NewsController@create');
Route::post('/news', 'NewsController@store');

Route::get('/viewnews', 'NewsController@view');

Route::get('/news/{id}', 'NewsController@destroy');

Route::get('/news/{id}/update', 'NewsController@update');
Route::put('/news/{id}', 'NewsController@edit');
