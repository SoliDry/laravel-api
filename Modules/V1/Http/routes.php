<?php

Route::group(['middleware' => 'web', 'prefix' => 'v1', 'namespace' => 'Modules\V1\Http\Controllers'], function()
{
    Route::get('/', 'V1Controller@index');
});
