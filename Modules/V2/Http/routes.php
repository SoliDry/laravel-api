<?php

Route::group(['middleware' => 'web', 'prefix' => 'v2', 'namespace' => 'Modules\V2\Http\Controllers'], function()
{
    Route::get('/', 'V2Controller@index');
});
