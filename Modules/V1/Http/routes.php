<?php

Route::group(['middleware' => 'web', 'prefix' => 'v1', 'namespace' => 'Modules\V1\Http\Controllers'], function()
{
    Route::get('/', 'V1Controller@index');
});

// Tag routes
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

// Article routes
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

// Topic routes
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

// MyOhMy routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    Route::get('/myoh_my', 'MyOhMyController@index');
    Route::get('/myoh_my/{id}', 'MyOhMyController@view');
    Route::post('/myoh_my', 'MyOhMyController@create');
    Route::patch('/myoh_my/{id}', 'MyOhMyController@update');
    Route::delete('/myoh_my/{id}', 'MyOhMyController@delete');
    // relation routes
    Route::get('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@relations');
    Route::post('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@createRelations');
    Route::patch('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@updateRelations');
    Route::delete('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@deleteRelations');
});

// Tag routes
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

// Article routes
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

// Topic routes
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

// MyOhMy routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    Route::get('/myoh_my', 'MyOhMyController@index');
    Route::get('/myoh_my/{id}', 'MyOhMyController@view');
    Route::post('/myoh_my', 'MyOhMyController@create');
    Route::patch('/myoh_my/{id}', 'MyOhMyController@update');
    Route::delete('/myoh_my/{id}', 'MyOhMyController@delete');
    // relation routes
    Route::get('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@relations');
    Route::post('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@createRelations');
    Route::patch('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@updateRelations');
    Route::delete('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@deleteRelations');
});

// Tag routes
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

// Article routes
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

// Topic routes
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

// MyOhMy routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    Route::get('/myoh_my', 'MyOhMyController@index');
    Route::get('/myoh_my/{id}', 'MyOhMyController@view');
    Route::post('/myoh_my', 'MyOhMyController@create');
    Route::patch('/myoh_my/{id}', 'MyOhMyController@update');
    Route::delete('/myoh_my/{id}', 'MyOhMyController@delete');
    // relation routes
    Route::get('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@relations');
    Route::post('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@createRelations');
    Route::patch('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@updateRelations');
    Route::delete('/myoh_my/{id}/relationships/{relations}', 'MyOhMyController@deleteRelations');
});
