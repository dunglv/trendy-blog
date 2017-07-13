<?php
Route::group(['prefix' => 'admin', 'middleware' => 'auth_admin:admin,user'], function() {
	//+user
    Route::get('/users', ['as' => 'ad.u.index', 'uses' => 'UserController@index']);
    Route::get('/users/pending', ['as' => 'ad.u.pending', 'uses' => 'UserController@pending']);
    Route::get('/users/{id}/active', ['as' => 'ad.u.active', 'uses' => 'UserController@active']);
    Route::get('/users/{id}/lock', ['as' => 'ad.u.lock', 'uses' => 'UserController@lock']);

    Route::get('/users/{id}/auth', ['as' => 'ad.u.auth', 'uses' => 'UserController@auth_view']);
    Route::post('/users/{id}/auth', ['as' => 'ad.u.auth_change', 'uses' => 'UserController@auth_change']);
});