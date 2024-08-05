<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', 'ArticleController@index')->name('article.list');
Route::get('/articles/{id}', 'ArticleController@show')->name('article.show');
