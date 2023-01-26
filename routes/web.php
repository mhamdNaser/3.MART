<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('index');
// });
// Route::resource('services', ServiceController::class);

Route::get('/', function () {
    return view('index');
});
Route::resource('Service', ServiceController::class);
Route::resource('Service.edit/{id}',ServiceController::class);