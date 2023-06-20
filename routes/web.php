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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AnggotaController;



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


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('admin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('admin');
});


// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });



Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::post('/peminjaman/update-status', [PeminjamanController::class, 'updateStatus'])->name('peminjaman.updateStatus');
Route::get('/peminjaman/{id_peminjaman}', [PeminjamanController::class, 'detail'])->name('peminjaman.detail');
Route::delete('/peminjaman/{id_peminjaman}', [PeminjamanController::class, 'delete'])->name('peminjaman.delete');
Route::get('/peminjaman/{id_peminjaman}/edit', [PeminjamanController::class, 'edit'])->name('peminjaman.edit');
Route::put('/peminjaman/{id_peminjaman}', [PeminjamanController::class, 'update'])->name('peminjaman.update');





// Route::get('/dashboard', function () {
//     // Periksa apakah pengguna sudah login
//     if (session()->has('username')) {
//         return view('dashboard');
//     } else {
//         return redirect('login');
//     }
// });

