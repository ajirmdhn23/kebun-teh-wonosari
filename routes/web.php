<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paket', function () {
    return view('paket');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');