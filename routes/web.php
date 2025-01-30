<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backoffice\ArticleController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search']);

// Artikel
Route::resource('articles', ArticleController::class)->except(['show']);
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');
