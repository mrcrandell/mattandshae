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

Route::get('/', 'HomeController@getIndex');
Route::post('/', 'HomeController@postIndex');
Route::get('/logout', 'HomeController@getLogout');
Route::get('/our-wedding', 'HomeController@getOurWedding');
Route::get('/photos', 'HomeController@getPhotos');
Route::get('/faq', 'HomeController@getFaq');
Route::get('/accommodations', 'HomeController@getAccommodations');
Route::get('/contact', 'HomeController@getContact');
Route::post('/contact', 'HomeController@postContact');
Route::get('/style-guide', 'HomeController@getStyleGuide');
