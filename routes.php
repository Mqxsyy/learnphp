<?php

use App\Controllers\AuthController;
use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Route;

Route::get("/", [PublicController::class, 'Index']);

Route::get("/us", [PublicController::class, 'US']);
Route::get("/form", [PublicController::class, 'Form']);
Route::post("/form", [PublicController::class, 'Answer']);

Route::get("/admin/posts", [PostsController::class, 'index']);
Route::post('/admin/posts', [PostsController::class, 'store']);
Route::get("/admin/posts/create", [PostsController::class, 'create']);
Route::get("/admin/posts/edit", [PostsController::class, 'edit']);
Route::post("/admin/posts/edit", [PostsController::class, 'update']);
Route::get('/admin/posts/view', [PostsController::class, 'view']);
Route::get('/admin/posts/delete', [PostsController::class, 'delete']);

Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);