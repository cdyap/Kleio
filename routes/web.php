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

Route::get('/', 'PagesController@index');
Route::get('/en/AboutUs', 'PagesController@about_us');
Route::post('/contact', 'PagesController@submit');

//Route::get('/ru', 'PagesController@index_ru');
//Route::get('/ru/AboutUs', 'PagesController@about_us_ru');

Route::get('/ar', 'PagesController@index_ar');
Route::get('/ar/AboutUs', 'PagesController@about_us_ar');