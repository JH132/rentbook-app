<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/{id_buku}', [BukuController::class, 'detail'])->name('buku.detail');


Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::post('/peminjaman/update-status', [PeminjamanController::class, 'updateStatus'])->name('peminjaman.updateStatus');
Route::get('/peminjaman/{id_peminjaman}', [PeminjamanController::class, 'detail'])->name('peminjaman.detail');
Route::delete('/peminjaman/{id_peminjaman}', [PeminjamanController::class, 'delete'])->name('peminjaman.delete');




