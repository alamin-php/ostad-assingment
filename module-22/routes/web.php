<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmailCampaignController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

//API Route
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);


//User Logout
Route::get('/user-logout',[UserController::class,'UserLogout']);
// Category API
Route::get('/category-list',[CategoryController::class,'CategoryList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/category-create',[CategoryController::class,'CategoryCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/category-update',[CategoryController::class,'CategoryUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/category-by-id',[CategoryController::class,'CategoryById'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/category-delete',[CategoryController::class,'CategoryDelete'])->middleware([TokenVerificationMiddleware::class]);

// Customer API
Route::get('/customer-list',[CustomerController::class,'CustomerList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/customer-create',[CustomerController::class,'CustomerCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/customer-update',[CustomerController::class,'CustomerUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/customer-by-id',[CustomerController::class,'CustomerById'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/customer-delete',[CustomerController::class,'CustomerDelete'])->middleware([TokenVerificationMiddleware::class]);

// Email Campaign API
Route::post('/email-campaign',[EmailCampaignController::class,'SendEmailCampaign'])->middleware([TokenVerificationMiddleware::class]);
// Page Routes
Route::get('/userLogin',[UserController::class,'LoginPage']);
Route::get('/userRegistration',[UserController::class,'RegistrationPage']);
Route::get('/sendOtp',[UserController::class,'SendOtpPage']);
Route::get('/verifyOtp',[UserController::class,'VerifyOTPPage']);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/dashboard',[DashboardController::class,'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/userProfile',[UserController::class,'ProfilePage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/categoryPage',[CategoryController::class,'CategoryPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/customerPage',[CustomerController::class,'CustomerPage'])->middleware([TokenVerificationMiddleware::class]);
