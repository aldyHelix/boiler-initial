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
        Route::get('/', 'CategoryController@index')
            ->name('administrator.master-data.category.index');
    });
