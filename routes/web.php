<?php

use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.dashboard-layout');
});

Route::get('/paket-1', function () {
    return view('pages.form');
})->name('paket-1');

Route::resource('PesananController', PesananController::class);
    
