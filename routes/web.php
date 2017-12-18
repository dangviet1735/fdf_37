<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('demo', function() {
    return view('admin.product.add');
});
Auth::routes();
Route::get('admin/login', 'Admin\LoginController@getLoginAdmin');
Route::post('admin/login', 'Admin\LoginController@postLoginAdmin')->name('postLoginAdmin');
Route::get('admin/logout', 'Admin\LoginController@getLogoutAdmin')->name('admin/logout');

Route::group(['middleware' => 'auth'], function() {
    Route::prefix('admin')->namespace('Admin')->group(function () {
        Route::prefix('user')->group(function(){
            Route::get('add', 'UserController@index');
        });
    });
});
