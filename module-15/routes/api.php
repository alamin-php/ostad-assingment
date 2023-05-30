<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('users',[UserController::class,'store']);
Route::apiResource('products',ProductController::class);
Route::apiResource('products',PostController::class);
