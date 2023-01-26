<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
<<<<<<< HEAD
Route::resource('categories', CategoryController::class);

=======

Route::resource('categories', CategoryController::class);

Route::resource('user', UserController::class);
>>>>>>> 496dd3e569adfa78fae916921e5925e3bf11dda5
