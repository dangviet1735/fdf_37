<?php

Route::get('/', function () {
    return view('client.page.index');
});

Auth::routes();
Route::get('admin/login', 'Admin\LoginController@getLoginAdmin');
Route::post('admin/login', 'Admin\LoginController@postLoginAdmin')->name('postLoginAdmin');
Route::get('admin/logout', 'Admin\LoginController@getLogoutAdmin')->name('admin/logout');

Route::group(['middleware' => 'auth'], function() {
    Route::get('admin/master', 'Admin\LoginController@master');
    Route::prefix('admin')->namespace('Admin')->group(function() {
        Route::resource('user', 'UserController', ['except' => ['show']]);
    });
});
