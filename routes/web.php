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

Route::get('', function () {
    return view('welcome');
});

//Admin
Route::prefix('admin')->group(function(){
    Route::get('santri', 'AdminController@index');
    Route::get('santri/create', 'AdminController@create');
    Route::post('santri', 'AdminController@store');
    Route::get('santri/{id}/edit', 'AdminController@edit');
    Route::put('santri', 'AdminController@update');
    Route::delete('santri/{id}/delete', 'AdminController@delete');
});
