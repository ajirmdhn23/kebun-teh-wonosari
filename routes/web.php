<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('beranda');

Route::view('/kontak', 'kontak')->name('kontak');

Route::view('/paket', 'paket')->name('paket');

Route::view('/pemesanan', 'pemesanan')->name('pemesanan');

Route::view('/katalog', 'katalog')->name('katalog');

Route::view('/event', 'event')->name('event');

Route::view('/login', 'login')->name('login');

Route::view('/register', 'register')->name('register');
