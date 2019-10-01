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
    return view('auth.login');
});
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::resource('mahasiswa', 'MahasiswaController');
});
Route::group(['prefix' => 'member'], function () {
    Route::resource('mahasiswa', 'MahasiswaController');
    Route::resource('mahasiswaregister', 'MahasiswaregisterController');
    // return View::make('register.index');
});
Auth::routes(['register' => false]);
Auth::routes(['mahasiswaregister.index' => true]);
Route::get('/home', 'HomeController@index')->name('home');
