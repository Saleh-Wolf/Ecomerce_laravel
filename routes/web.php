<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class,'index']);

Route::apiResource('categories', CategoryController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/category/{id}', [BlogController::class,'category']);

Route::get('/post/{id}', [BlogController::class,'show']);

Route::get('/search', [BlogController::class,'search']);