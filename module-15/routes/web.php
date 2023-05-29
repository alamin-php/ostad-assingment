<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return redirect('dashboard');
});


// Route::middleware(['AuthMiddleware'])->group(function () {
//     // Routes accessible to authenticated users only
//     Route::get('/profile', 'ProfileController@index');
//     Route::get('/settings', 'SettingsController@index');
// });
