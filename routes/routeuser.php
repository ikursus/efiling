<?php

// Routes group untuk prefix users
Route::group(['prefix' => 'users'], function() {

    // Papar senarai users bagi alamat http://sistemdata.dev/users
    Route::get('/', 'UsersController@index');

    // Papar borang tambah users bagi alamat http://sistemdata.dev/users/tambah
    Route::get('tambah', 'UsersController@create');

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/users/tambah
    Route::post('tambah', 'UsersController@store');

    // Papar borang edit users bagi alamat http://sistemdata.dev/users/{id}/edit
    Route::get('{id}/edit', 'UsersController@edit');

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/users/{id}/edit
    // Untuk kemaskini data berdasarkan ID
    Route::patch('{id}/edit', 'UsersController@update');

    // Hapus rekod user daripada database berdasarkan
    // alamat http://sistemdata.dev/users/{id}
    Route::delete('{id}', 'UsersController@destroy');

});
