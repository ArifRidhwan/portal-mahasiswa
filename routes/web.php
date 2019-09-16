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

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::resource('mahasiswa', 'MahasiswaController');
});
Route::group(['prefix' => 'member'], function () {
    Route::resource('register', 'MahasiswaregisterController');
});
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
