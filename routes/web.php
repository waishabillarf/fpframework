<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


// Route untuk halaman welcome
Route::get('/', function () {
    return view('welcome');
});

// Route untuk autentikasi
Auth::routes();

// Route untuk halaman home
Route::get('/home', [HomeController::class, 'index'])->name('home');
