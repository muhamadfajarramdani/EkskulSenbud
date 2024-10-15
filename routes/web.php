<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\SeniBudayaController;

Route::resource('/ekstrakurikuler', EkstrakurikulerController::class);
// Route::resource('/anggota', AnggotaController::class);
// Route::resource('ekstrakurikuler', EkstrakurikulerController::class);
// Route::get('ekstrakurikuler/{id}/siswa', [SiswaController::class, 'showSiswaEkstrakurikuler'])->name('ekstrakurikuler.siswa');
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/senibudaya')->name('senbud.')->group(function (){
    Route::get('/data', [SeniBudayaController::class, 'index'])->name('data');
    Route::get('/tambah', [SeniBudayaController::class, 'create'])->name('create');
    Route::post('/tambah', [SeniBudayaController::class, 'store'])->name('tambah_senibudaya');
    Route::delete('/hapus/{id}', [SeniBudayaController::class, 'destroy'])->name('hapus');
    Route::get('/edit/{id}', [SeniBudayaController::class, 'edit'])->name('edit');
    Route::patch('/edit/{id}', [SeniBudayaController::class, 'update'])->name('edit.formulir');
});





