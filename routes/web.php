<?php

/**
 *
 *
 */

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::resource('mahasiswa', 'MahasiswaController');
});
// Route::group(['prefix' => 'member'], function () {
//     Route::resource('mahasiswa', 'MahasiswaController');
//     Route::resource('mahasiswaregister', 'MahasiswaregisterController');
//     // return View::make('register.index');

Auth::routes(); //UDH BENER KN?
// Auth::routes(['mahasiswaregister.index' => true]);
Route::get('/home', 'HomeController@index')->name('home');
