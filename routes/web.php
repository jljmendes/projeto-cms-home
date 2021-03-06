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

//Parte frontal do sistema
Route::get('/', 'Site\HomeController@index');

//Parte traseira do sistema
Route::prefix('painel')->group(function(){
    Route::get('/', 'Admin\HomeController@index')->name('admin');
    Route::get('login', 'Admin\Auth\LoginController@index')->name('login');
});
