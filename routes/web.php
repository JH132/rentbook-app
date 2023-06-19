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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::delete('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.delete');
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/{id_buku}', [BukuController::class, 'detail'])->name('buku.detail');
Route::get('/buku/{id_buku}/update', [BukuController::class, 'update'])->name('buku.update');







