<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactController;
use App\Models\Service;
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
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;

// Route::get('/', function () {
//     return view('index');
// });
// Route::resource('services', ServiceController::class);

Route::get('/', function () {
    $all_categories=Category::get();
    return view('home',["allcategories"=>$all_categories]);
});
// Route::get('/', function () { return view('home'); });
Route::get('index', function () { return view('index'); });
Route::get('about', function () { return view('about'); });
// Route::get('contact', function () { return view('contact'); });
Route::get('service', function () { return view('service'); });
Route::get('profile', function () { return view('profile'); });
Route::get('cart', function () { return view('cart'); });
Route::get('dashboard', function () { return view('index'); });



Route::resource('categories', CategoryController::class);
Route::resource('Reservation', ReservationController::class);
Route::resource('Service', ServiceController::class);
Route::resource('categories', CategoryController::class);
Route::resource('user', UserController::class);


Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'create')->name('register');
    Route::post('register', 'store')->name('register');
    Route::get('login', 'index')->name('login');
    Route::post('login', 'login')->name('go.login');
    Route::get('logout', 'destroy')->name('logout');
});

// Route::get('service', function () {
//     $services = Service::all();
//     return view('service',["collection"=>$services]);
// });

// Route::get('contact', function () {
//     return view('contact');
// });

Route::get('service', function () {
    $services = Service::all();
    return view('service',["collection"=>$services]);
});

// Route::get('dashboard', function () {
//     return view('index');
// });


Route::resource('Service', ServiceController::class);

Route::resource('categories', CategoryController::class);

Route::resource('user', UserController::class);
Route::resource('contact', ContactController::class);





