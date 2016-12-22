<?php
Route::group(["prefix" => "v3", "namespace" => "Modules\\V2\\Http\\Controllers"], function()
{
    Route::get("/article", "ArticleController@index");
    Route::get("/article/{id}", "ArticleController@view");
    Route::post("/article", "ArticleController@create");
    Route::patch("/article/{id}", "ArticleController@update");
    Route::delete("/article/{id}", "ArticleController@delete");
});
