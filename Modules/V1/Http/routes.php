<?php

Route::group(['middleware' => 'web', 'prefix' => 'v1', 'namespace' => 'Modules\V1\Http\Controllers'], function()
{
    Route::get('/', 'V1Controller@index');
});

Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    Route::get('/tag', 'TagController@index');
    Route::get('/tag/{id}', 'TagController@view');
    Route::post('/tag', 'TagController@create');
    Route::patch('/tag/{id}', 'TagController@update');
    Route::delete('/tag/{id}', 'TagController@delete');
    // relation routes
    Route::get('/tag/{id}/relationships/{relations}', 'TagController@relations');
    Route::post('/tag/{id}/relationships/{relations}', 'TagController@createRelations');
    Route::patch('/tag/{id}/relationships/{relations}', 'TagController@updateRelations');
    Route::delete('/tag/{id}/relationships/{relations}', 'TagController@deleteRelations');
});

Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    Route::get('/article', 'ArticleController@index');
    Route::get('/article/{id}', 'ArticleController@view');
    Route::post('/article', 'ArticleController@create');
    Route::patch('/article/{id}', 'ArticleController@update');
    Route::delete('/article/{id}', 'ArticleController@delete');
    // relation routes
    Route::get('/article/{id}/relationships/{relations}', 'ArticleController@relations');
    Route::post('/article/{id}/relationships/{relations}', 'ArticleController@createRelations');
    Route::patch('/article/{id}/relationships/{relations}', 'ArticleController@updateRelations');
    Route::delete('/article/{id}/relationships/{relations}', 'ArticleController@deleteRelations');
});

Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    Route::get('/topic', 'TopicController@index');
    Route::get('/topic/{id}', 'TopicController@view');
    Route::post('/topic', 'TopicController@create');
    Route::patch('/topic/{id}', 'TopicController@update');
    Route::delete('/topic/{id}', 'TopicController@delete');
    // relation routes
    Route::get('/topic/{id}/relationships/{relations}', 'TopicController@relations');
    Route::post('/topic/{id}/relationships/{relations}', 'TopicController@createRelations');
    Route::patch('/topic/{id}/relationships/{relations}', 'TopicController@updateRelations');
    Route::delete('/topic/{id}/relationships/{relations}', 'TopicController@deleteRelations');
});
