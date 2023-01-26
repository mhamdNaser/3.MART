<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;



// Route::get('/', function () {
//     return view('index');
// });
// Route::resource('services', ServiceController::class);

Route::get('/', function () {
    return view('home');
});


Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'create')->name('register');
    Route::post('register', 'store')->name('register');
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('go.login');
    Route::post('logout', 'destroy')->name('logout');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('service', function () {
    return view('service');
});

// Route::get('dashboard', function () {
//     return view('index');
// });

Route::resource('Service', ServiceController::class);
// Route::resource('Service.edit/{id}',ServiceController::class);

Route::resource('categories', CategoryController::class);

Route::resource('user', UserController::class);



