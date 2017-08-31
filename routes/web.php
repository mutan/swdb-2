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

Auth::routes();

Route::resource('cards', 'CardController');
Route::resource('editions', 'EditionController');
Route::resource('rarities', 'RarityController');
Route::resource('races', 'RaceController');
Route::resource('types', 'TypeController');
Route::resource('artists', 'ArtistController');



Route::get('image-gallery', 'ImageGalleryController@index');

Route::post('image-gallery', 'ImageGalleryController@upload');

Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');