<?php

/*************************************************************************
 * UI Handle
 *************************************************************************
 *
 * @return void
 * @author 
 **/



/*************************************************************************
 * Admin Dashboard Handle
 *************************************************************************
 *
 * @return void
 * @author 
 **/

Route::group(['prefix' => 'admin', 'middleware' => 'auth_admin:admin,user'], function() {
    Route::get('/articles', [
    	'as' => 'ad.a.index',
    	'uses' => 'ArticleController@index'
    	]);
    Route::get('/articles/pending', [
        'as' => 'ad.a.pending',
        'uses' => 'ArticleController@pending'
        ]);
    Route::get('/articles/create', [
    	'as' => 'ad.a.create',
    	'uses' => 'ArticleController@create'
    	]);

    Route::get('/articles/{id}/active', [
        'as' => 'ad.a.active',
        'uses' => 'ArticleController@active'
        ]);
    Route::get('/articles/{id}/delete', [
        'as' => 'ad.a.delete',
        'uses' => 'ArticleController@destroy'
        ]);
    Route::post('/articles/create', [
    	'as' => 'ad.a.store',
    	'uses' => 'ArticleController@store'
    	]);
    Route::get('handle-article-request', [
        'as' => 'ad.a.handle-request',
        'uses' => 'HandleGeneralController@handdle_article'
        ]);
});