<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('testing', function () {
    echo 'testing';
});

Auth::routes();

Route::get('/home', 'HomeController@index');


// http://sistemdata.dev/users
// Route::get('users', function() {
//   echo 'Senarai users';
// });

// http://sistemdata.dev/users/tambah
// Route::get('users/tambah', function() {
//   echo 'Halaman borang tambah user';
// });


// Routes untuk pengurusan users
Route::group(['prefix' => 'users'], function() {

    // Papar senarai users bagi alamat http://sistemdata.dev/users
    Route::get('/', function() {
      echo 'Senarai Users';
    });

    // Papar borang tambah users bagi alamat http://sistemdata.dev/users/tambah
    Route::get('tambah', function() {
      echo 'Halaman Borang Tambah User';
    });

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/users/tambah
    Route::post('tambah', function() {
      echo 'Proses data simpan ke database';
    });

});
