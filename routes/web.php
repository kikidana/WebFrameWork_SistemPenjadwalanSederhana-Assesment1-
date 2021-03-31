<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'find']);

Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/dosen/{id}', [DosenController::class, 'find']);

Route::post('/jadwal', [JadwalController::class, 'store']) ->name('jadwal.store');

Route::get('/jadwal', [JadwalController::class, 'index']) ->name('jadwal.index');

Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('jadwal.create');

Route::get('/jadwal/{id}', [JadwalController::class, 'find'])->name('jadwal.find');

Route::get('/jadwal/{id}/edit', [JadwalController::class, 'edit'])->name('jadwal.edit');

Route::put('/jadwal/{id}', [JadwalController::class, 'update'])->name('jadwal.update');

Route::delete('/jadwal/{id}', [JadwalController::class, 'delete'])->name('jadwal.delete');