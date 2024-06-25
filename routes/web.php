<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Auth\DashboardController;

// Route::get('/', function () {
//     return view('');
// });

// Frontend Routes
Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'about'])->name('website.layout');
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/service',[ServicesController::class, 'index']);


// Admin Routes
Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dashboard');

// Auth Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('auth.login');
