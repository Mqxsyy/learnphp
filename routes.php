<?php

use App\Controllers\PublicController;
use App\Route;

Route::get("/", [PublicController::class, 'Index']);
Route::get("/us", [PublicController::class, 'US']);
Route::get("/form", [PublicController::class, 'Form']);
Route::post("/form", [PublicController::class, 'Answer']);