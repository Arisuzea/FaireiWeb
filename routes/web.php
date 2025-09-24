<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotPasswordController;







Route::get('/', function () {
    return view('index');
})->name('home');

// Logins
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Registrations
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register.register');

// Password Reset
// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// })->name('forgot-password');
Route::get('forgot-password', [ForgotPasswordController::class, 'show'])->name('password.reset');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');