<?php

use App\Http\Controllers\KelasController;
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

Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::get('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::get('/kelas/destroy', [KelasController::class, 'destroy'])->name('kelas.destroy');
