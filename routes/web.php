<?php

use Illuminate\Support\Facades\Route;

// Route Dashboard
Route::get('/', function () {
    return view('dashboard');
});

// Route Data Infrastruktur
Route::get('/data-infrastruktur', function () {
    return view('data-infrastruktur');
})->name('data.infrastruktur');

// Route Data Pertanian
Route::get('/data-pertanian', function () {
    return view('data-pertanian'); 
})->name('data.pertanian');

// Route Fasilitas Publik
Route::get('/fasilitas-publik', function () {
    return view('fasilitas-publik'); 
})->name('fasilitas.publik');

// Route Pemetaan SIG
Route::get('/pemetaan-sig', function () {
    return view('pemetaan-sig'); 
})->name('pemetaan.sig');

// Route Proyek Pembangunan
Route::get('/proyek-pembangunan', function () {
    return view('proyek-pembangunan'); 
})->name('proyek.pembangunan');

// Route Proyek Pembangunan
Route::get('/tentang-dashboard', function () {
    return view('tentang-dashboard'); 
})->name('tentang.dashboard');