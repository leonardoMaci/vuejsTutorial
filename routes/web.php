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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home2', 'HomeController@home2')->name('home2');

Route::middleware(['auth'])->namespace('Admin')->prefix('admin')->group(function(){
    Route::resource('artigos', 'ArtigosController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
