<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);

Route::get('/todo-list',[TodoController::class,'TodoList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/todo-create',[TodoController::class,'TodoCreate'])->middleware([TokenVerificationMiddleware::class]);

