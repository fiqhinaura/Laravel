<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UnitKerjaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('unitkerja', UnitKerjaController::class);
Route::resource('penerimaan', PenerimaanController::class);
//Route::get('pindex', PenerimaanController::class);

Route::get('/pindex', [PenerimaanController::class, 'pindex']);
Route::get('/tindex', [PenerimaanController::class, 'tindex']);

// Route::get('/penerimaan/tidak-kode', [PenerimaanController::class, 'penerimaanTanpaKode'])->name('penerimaan.penerimaantanpakode');
// Route::get('/penerimaan/tidak-TI', [PenerimaanController::class, 'penerimaanTI'])->name('penerimaan.penerimaanTI');
// Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
// Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
// Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
// Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
// Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
// Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

// Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
// Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
// Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
// Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
// Route::put('/siswa/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');
// Route::delete('/siswa/{id}/delete', [SiswaController::class, 'destroy'])->name('siswa.destroy');
