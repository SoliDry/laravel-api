<?php
Route::group(['middleware' => 'web', 'prefix' => 'v2', 'namespace' => 'Modules\V2\Http\Controllers'], function()
{
    Route::get('/index', 'ArticleController@index');
    Route::get('/view/{id}', 'ArticleController@view');
    Route::post('/create', 'ArticleController@create')->middleware(\Modules\V2\Http\Middleware\ArticleMiddleware::class);
    Route::patch('/update/{id}', 'ArticleController@update')->middleware(\Modules\V2\Http\Middleware\ArticleMiddleware::class);
    Route::delete('/delete/{id}', 'ArticleController@delete');
});
