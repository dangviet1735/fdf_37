<?php

Route::get('/', function () {
    return view('client.page.index');
});

Auth::routes();

Route::group(['middleware' => 'admin'], function() {
    Route::get('admin/master', 'User\LoginController@master');
    Route::prefix('admin')->namespace('Admin')->group(function() {
        Route::resource('user', 'UserController', ['except' => ['show']]);
    });
});

Route::get('login', 'User\LoginController@getLogin');
Route::post('login', 'User\LoginController@postLogin')->name('postLogin');
Route::get('logout', 'User\LoginController@getLogout')->name('logout');
