<?php
// >>>routes>>>
// Tag routes
Route::group(['prefix' => 'v2', 'namespace' => '\\Modules\\V2\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/tag/bulk', 'TagController@createBulk');
    Route::patch('/tag/bulk', 'TagController@updateBulk');
    Route::delete('/tag/bulk', 'TagController@deleteBulk');
    // basic routes
    Route::options('/tag', 'TagController@options');
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
// <<<routes<<<

// >>>routes>>>
// Article routes
Route::group(['prefix' => 'v2', 'namespace' => '\\Modules\\V2\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/article/bulk', 'ArticleController@createBulk');
    Route::patch('/article/bulk', 'ArticleController@updateBulk');
    Route::delete('/article/bulk', 'ArticleController@deleteBulk');
    // basic routes
    Route::options('/article', 'ArticleController@options');
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
// <<<routes<<<

// >>>routes>>>
// User routes
Route::group(['prefix' => 'v2', 'namespace' => '\\Modules\\V2\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/user/bulk', 'UserController@createBulk');
    Route::patch('/user/bulk', 'UserController@updateBulk');
    Route::delete('/user/bulk', 'UserController@deleteBulk');
    // basic routes
    Route::options('/user', 'UserController@options');
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
// <<<routes<<<

// >>>routes>>>
// Menu routes
Route::group(['prefix' => 'v2', 'namespace' => '\\Modules\\V2\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/menu/bulk', 'MenuController@createBulk');
    Route::patch('/menu/bulk', 'MenuController@updateBulk');
    Route::delete('/menu/bulk', 'MenuController@deleteBulk');
    // basic routes
    Route::options('/menu', 'MenuController@options');
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
// <<<routes<<<

// >>>routes>>>
// Topic routes
Route::group(['prefix' => 'v2', 'namespace' => '\\Modules\\V2\\Http\\Controllers'], function()
{
    // bulk routes
    Route::post('/topic/bulk', 'TopicController@createBulk');
    Route::patch('/topic/bulk', 'TopicController@updateBulk');
    Route::delete('/topic/bulk', 'TopicController@deleteBulk');
    // basic routes
    Route::options('/topic', 'TopicController@options');
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
// <<<routes<<<
