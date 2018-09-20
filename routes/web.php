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
Route::get('home', 'pagesController@HomePage');
Route::get('weather/{woeid}', 'pagesController@WeatherPage');
Route::get('search/{city}/{woeid}', 'pagesController@SearchResult');

Route::get('/', function () {
    return redirect('home');
});
