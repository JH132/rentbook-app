<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// Route::middleware(['auth'])->group(function () {
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

Route::get('/anggota/create', [BukuController::class, 'create'])->name('anggota.create');
Route::post('/anggota', [BukuController::class, 'store'])->name('anggota.store');
Route::get('/anggota', [BukuController::class, 'index'])->name('anggota.index');