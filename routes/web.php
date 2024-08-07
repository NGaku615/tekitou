<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return redirect(('/articles'));
});

Route::get('/articles', [ArticleController::class,'index'])->name("article.list");
Route::get('/article/new', [ArticleController::class,'create'])->name("article.new");
Route::post('/article', [ArticleController::class,'store'])->name("article.store");

Route::get('/article/edit/{id}', [ArticleController::class,'edit'])->name("article.edit");
Route::post('/article/update/{id}', [ArticleController::class,'update'])->name("article.update");

Route::get('/article/{id}', [ArticleController::class,'show'])->name("article.show");
Route::post('/article/{id}', [ArticleController::class,'destroy'])->name("article.delete");
