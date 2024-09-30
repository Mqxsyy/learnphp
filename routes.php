<?php

use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Route;

Route::get("/", [PublicController::class, 'Index']);

Route::get("/us", [PublicController::class, 'US']);
Route::get("/form", [PublicController::class, 'Form']);
Route::post("/form", [PublicController::class, 'Answer']);

Route::get("/admin/posts", [PostsController::class, 'index']);
Route::get("/admin/posts/create", [PostsController::class, 'create']);
Route::get('/admin/posts/view', [PostsController::class, 'view']);
Route::post('/admin/posts', [PostsController::class, 'store']);