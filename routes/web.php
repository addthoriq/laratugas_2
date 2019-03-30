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
    //Santri
    Route::get('santri', 'Admin\SantriController@index');
    Route::get('santri/create', 'Admin\SantriController@create');
    Route::post('santri', 'Admin\SantriController@store');
    Route::get('santri/{id}/edit', 'Admin\SantriController@edit');
    Route::put('santri', 'Admin\SantriController@update');
    Route::delete('santri/{id}/delete', 'Admin\SantriController@delete');

    //Asatidz
    Route::get('guru','Admin\AsatidzController@index');
    Route::get('guru/create', 'Admin\AsatidzController@create');
    Route::post('guru', 'Admin\AsatidzController@store');
});
