<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::apiResource('categories', CategoryController::class);
Route::get('/posts', [PostController::class, 'index']);