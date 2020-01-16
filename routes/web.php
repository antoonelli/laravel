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

Route::prefix('admin')->group(function(){
	Route::get('restaurants', 'Admin\\RestaurantController@index')->name('restautant.index');
	Route::get('restaurants/new', 'Admin\\RestaurantController@new')->name('restautant.new');
	Route::post('restaurants/store', 'Admin\\RestaurantController@store')->name('restautant.store');
	Route::get('restaurants/edit/{id}','Admin\\RestaurantController@edit')->name('restaurant.edit');
});