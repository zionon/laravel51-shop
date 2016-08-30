<?php

Route::group(['namespace' => 'Auth'], function () {
	Route::get('/admin/login', 'AuthController@getLogin');
	Route::post('/admin/login', 'AuthController@postLogin');
	Route::get('/admin/logout', 'AuthController@getLogout');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('admin', function () {
		echo "this is admin";
	});
});