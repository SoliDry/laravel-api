<?php
Route::group(["prefix" => "v1", "namespace" => "Modules\\V1\\Http\\Controllers"], function()
{
    Route::get("/article", "ArticleController@index");
    Route::get("/article/{id}", "ArticleController@view");
    Route::post("/article", "ArticleController@create");
    Route::patch("/article/{id}", "ArticleController@update");
    Route::delete("/article/{id}", "ArticleController@delete");
});
