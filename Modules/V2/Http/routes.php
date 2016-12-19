<?php
Route::group(['middleware' => 'web', 'prefix' => 'v2', 'namespace' => 'Modules\V2\Http\Controllers'], function()
{
    Route::get('/article/index', 'ArticleController@index');
    Route::get('/article/view/{id}', 'ArticleController@view');
    Route::post('/article/create', 'ArticleController@create');
    Route::patch('/article/update/{id}', 'ArticleController@update');
    Route::delete('/article/delete/{id}', 'ArticleController@delete');
});
