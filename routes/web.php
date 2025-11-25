<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

// Route Data Infrastruktur
Route::get('/data-infrastruktur', function () {
    return view('data-infrastruktur');
})->name('data.infrastruktur');
