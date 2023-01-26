<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;



// Route::get('/', function () {
//     return view('index');
// });
// Route::resource('services', ServiceController::class);

Route::get('/home', function () {
    return view('home');
});

Route::get('register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
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

Route::get('dashboard', function () {
    return view('index');
});

<<<<<<< HEAD
Route::get('profile', function () {
    return view('admin/profile');
});
=======
Route::resource('Service', ServiceController::class);
// Route::resource('Service.edit/{id}',ServiceController::class);

>>>>>>> dd2235d109d861cf1bc32957480f2a1dc7c9d6bc
Route::resource('categories', CategoryController::class);

Route::resource('user', UserController::class);



