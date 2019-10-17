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
// Route::get('user/profile', function () {
//     //
// })->name('profile');

// Route::get('/profile', function () {
//     return view('profile');
// });

Route::group(['prefix' => 'mahasiswa', 'middleware'], function () {
    // Route::resource('mahasiswa', 'MahasiswaController');
    Route::resource('profile', 'ProfileController');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
