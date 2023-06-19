<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anggota/create', [BukuController::class, 'create'])->name('anggota.create');
Route::post('/anggota', [BukuController::class, 'store'])->name('anggota.store');
Route::get('/anggota', [BukuController::class, 'index'])->name('anggota.index');
