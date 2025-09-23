<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register.register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');