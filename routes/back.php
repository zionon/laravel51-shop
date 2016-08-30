<?php

Route::get('/admin/login', 'AuthController@getLogin');


Route::group(['middleware' => 'auth'], function () {
	Route::get('admin', function () {
		echo "this is admin";
	});
});