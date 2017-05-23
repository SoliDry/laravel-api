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
    Route::get('/article', 'ArticleController@index')->middleware('jwt');
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

// User routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    Route::get('/user', 'UserController@index');
    Route::get('/user/{id}', 'UserController@view');
    Route::post('/user', 'UserController@create');
    Route::patch('/user/{id}', 'UserController@update');
    Route::delete('/user/{id}', 'UserController@delete');
    // relation routes
    Route::get('/user/{id}/relationships/{relations}', 'UserController@relations');
    Route::post('/user/{id}/relationships/{relations}', 'UserController@createRelations');
    Route::patch('/user/{id}/relationships/{relations}', 'UserController@updateRelations');
    Route::delete('/user/{id}/relationships/{relations}', 'UserController@deleteRelations');
});

// Menu routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    Route::get('/menu', 'MenuController@index');
    Route::get('/menu/{id}', 'MenuController@view');
    Route::post('/menu', 'MenuController@create');
    Route::patch('/menu/{id}', 'MenuController@update');
    Route::delete('/menu/{id}', 'MenuController@delete');
    // relation routes
    Route::get('/menu/{id}/relationships/{relations}', 'MenuController@relations');
    Route::post('/menu/{id}/relationships/{relations}', 'MenuController@createRelations');
    Route::patch('/menu/{id}/relationships/{relations}', 'MenuController@updateRelations');
    Route::delete('/menu/{id}/relationships/{relations}', 'MenuController@deleteRelations');
});

// Template routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    Route::get('/template', 'TemplateController@index');
    Route::get('/template/{id}', 'TemplateController@view');
    Route::post('/template', 'TemplateController@create');
    Route::patch('/template/{id}', 'TemplateController@update');
    Route::delete('/template/{id}', 'TemplateController@delete');
    // relation routes
    Route::get('/template/{id}/relationships/{relations}', 'TemplateController@relations');
    Route::post('/template/{id}/relationships/{relations}', 'TemplateController@createRelations');
    Route::patch('/template/{id}/relationships/{relations}', 'TemplateController@updateRelations');
    Route::delete('/template/{id}/relationships/{relations}', 'TemplateController@deleteRelations');
});

// CategoryTemplate routes
Route::group(['prefix' => 'v1', 'namespace' => 'Modules\\V1\\Http\\Controllers'], function()
{
    Route::get('/category_template', 'CategoryTemplateController@index');
    Route::get('/category_template/{id}', 'CategoryTemplateController@view');
    Route::post('/category_template', 'CategoryTemplateController@create');
    Route::patch('/category_template/{id}', 'CategoryTemplateController@update');
    Route::delete('/category_template/{id}', 'CategoryTemplateController@delete');
    // relation routes
    Route::get('/category_template/{id}/relationships/{relations}', 'CategoryTemplateController@relations');
    Route::post('/category_template/{id}/relationships/{relations}', 'CategoryTemplateController@createRelations');
    Route::patch('/category_template/{id}/relationships/{relations}', 'CategoryTemplateController@updateRelations');
    Route::delete('/category_template/{id}/relationships/{relations}', 'CategoryTemplateController@deleteRelations');
});
