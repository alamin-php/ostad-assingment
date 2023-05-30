<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


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



Route::get('contact',ContactController::class);
