<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Guess Route
Route::get('/', function () {return view('landing_page');})->name('landing_page');
Route::get('welcome', function() {return view('welcome');})->name('welcome');
Route::get('product', action: function() {return view('product');})->name('product');
Route::get('after-login', action: function() {return view('after-login');})->name('after_login');
Route::get('after-register', action: function() {return view('after-register');})->name('after_register');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('home', function() {return view("home");})->name('home');
});

require __DIR__.'/auth.php';
