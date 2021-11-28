<?php
use Illuminate\Support\Facades\Route;
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

    Route::group(['prefix' => 'administrator/master-data/category', 'middleware' => 'auth'], function() {
        Route::get('/', 'CategoryController@index')->name('administrator.master-data.category.index');
        Route::get('/create', 'CategoryController@create')->name('administrator.master-data.category.create');
        Route::get('/show/{id}', 'CategoryController@show')->name('administrator.master-data.category.show');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('administrator.master-data.category.edit');
        Route::delete('/destroy/{id}', 'CategoryController@destroy')->name('administrator.master-data.category.destroy');
        Route::post('/store', 'CategoryController@store')->name('administrator.master-data.category.store');
        Route::put('/update/{id}', 'CategoryController@update')->name('administrator.master-data.category.update');
    });
