<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;



// Route::get('/', function () {
//     return view('index');
// });
// Route::resource('services', ServiceController::class);

Route::get('/', function () {
    return view('index');
});

Route::resource('Service', ServiceController::class);
// Route::resource('Service.edit/{id}',ServiceController::class);

Route::resource('categories', CategoryController::class);

Route::resource('user', UserController::class);

