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

Route::prefix('addonfeature')->group(function() {
    Route::get('/', 'AddOnFeatureController@index');
});

Route::group(['prefix' => 'administrator/master-data/add-on-feature', 'middleware' => 'auth'], function() {
    Route::get('/', 'AddOnFeatureController@index')->name('administrator.master-data.add-on-feature.index');
    Route::get('/create', 'AddOnFeatureController@create')->name('administrator.master-data.add-on-feature.create');
    Route::get('/show/{id}', 'AddOnFeatureController@show')->name('administrator.master-data.add-on-feature.show');
    Route::get('/edit/{id}', 'AddOnFeatureController@edit')->name('administrator.master-data.add-on-feature.edit');
    Route::delete('/destroy/{id}', 'AddOnFeatureController@destroy')->name('administrator.master-data.add-on-feature.destroy');
    Route::post('/store', 'AddOnFeatureController@store')->name('administrator.master-data.add-on-feature.store');
    Route::put('/update/{id}', 'AddOnFeatureController@update')->name('administrator.master-data.add-on-feature.update');
});
