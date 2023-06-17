<?php

use App\Http\Controllers\Admin\Venue\VenueController as VenueVenueController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\PreOrder\PreOrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Venue\VenueController;
use App\Models\Venue;
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

Route::get('/layouts/app', function () {
    return view('layouts.app');
});

// Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');


// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');


// Admin
Route::get('/admin', [VenueVenueController::class, 'index'])->middleware(['auth', 'admin']);
Route::post('/admin/venue', [VenueVenueController::class, 'venueStore'])->middleware(['auth', 'admin'])->name('venue.store');
Route::get('/admin/venue/add', [VenueVenueController::class, 'add'])->middleware(['auth', 'admin'])->name('add.venue');
Route::get('/admin/venue/{id}', [VenueVenueController::class, 'detail'])->middleware(['auth', 'admin']);
Route::get('/admin/venue/{id}/edit', [VenueVenueController::class, 'edit'])->middleware(['auth', 'admin']);
Route::put('/admin/venue/{id}', [VenueVenueController::class, 'update'])->middleware(['auth', 'admin']);
// User
Route::get('/home', [UserController::class, 'index'])->middleware(['auth', 'user']);
Route::get('/venue', [VenueController::class, 'index'])->middleware(['auth', 'user']);
Route::get('/venue/date/{id}', [VenueController::class, 'jadwal'])->middleware(['auth', 'user']);
Route::get('/venue/time/{id}', [VenueController::class, 'time'])->middleware(['auth', 'user']);
Route::get('/venue/{id}', [VenueController::class, 'detail'])->middleware('auth');
Route::post('/pre_order', [PreOrderController::class, 'pre_order'])->middleware('auth')->name('pre_order.store');
Route::get('/detail-order', [OrderController::class, 'index'])->middleware('auth')->name('detail-order');
Route::get('/order/{id}', [OrderController::class, 'order'])->middleware('auth')->name('order');
Route::get('/invoice/{id}', [OrderController::class, 'invoice'])->middleware('auth')->name('invoice');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');