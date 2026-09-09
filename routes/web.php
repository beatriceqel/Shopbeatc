<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama (Frontend)
Route::get('/', function () {
    return view('frontend');
})->name('frontend');

// Halaman Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Halaman Admin
Route::get('/admin', function () {
    return view('admin');
})->name('admin');