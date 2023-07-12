<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostDetailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// page route
Route::get('/', [PostController::class, 'page'])->name('blog');
Route::get('/posts', [PostController::class, 'page']);
Route::get('/posts/{id}', [PostDetailController::class, 'page']);

// axios
Route::get('/PostList', [PostController::class, 'PostList']);
Route::get('/SinglePost/{id}', [PostController::class, 'SinglePost']);
Route::get('/PostUser/{id}', [PostController::class, 'PostUser']);

Route::get('/PostShowComment/{id}', [PostDetailController::class, 'PostShowComment']);
Route::post('/PostCreateComment/{id}', [PostDetailController::class, 'PostCreateComment']);