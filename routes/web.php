<?php
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


use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AnggotaController;

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

//rute buku
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::delete('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.delete');
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/{id_buku}', [BukuController::class, 'detail'])->name('buku.detail');
Route::get('/buku/{id_buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id_buku}', [BukuController::class, 'update'])->name('buku.update');

//rute anggota
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');
Route::delete('/anggota/delete/{id}', [AnggotaController::class, 'destroy'])->name('anggota.delete');
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota/{id_anggota}', [AnggotaController::class, 'detail'])->name('anggota.detail');
Route::get('/anggota/{id_anggota}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
Route::put('/anggota/{id_anggota}', [AnggotaController::class, 'update'])->name('anggota.update');


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});


//rute peminjaman
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::post('/peminjaman/update-status', [PeminjamanController::class, 'updateStatus'])->name('peminjaman.updateStatus');
Route::get('/peminjaman/{id_peminjaman}', [PeminjamanController::class, 'detail'])->name('peminjaman.detail');
Route::delete('/peminjaman/{id_peminjaman}', [PeminjamanController::class, 'delete'])->name('peminjaman.delete');
Route::get('/peminjaman/{id_peminjaman}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
Route::put('/peminjaman/{id_peminjaman}', [PeminjamanController::class, 'update'])->name('peminjaman.update');

//rute home
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/home/{id_buku}', [HomeController::class, 'detail'])->name('home.detail');

Route::middleware('auth')->group (function (){
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



