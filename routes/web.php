<?php

use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/', function () {
    return view('frontend');
});

// Halaman Login
Route::get('/login', function () {
    return view('login');
});

// Proses Login
Route::post('/login', function () {

    $email = request('email');
    $password = request('password');

    // Akun admin sementara
    if ($email === 'admin@gmail.com' && $password === 'admin123') {
        return redirect('/admin');
    }

    return back()->with('error', 'Email atau password salah.');
});

// Halaman Admin
Route::get('/admin', function () {
    return view('admin');
});