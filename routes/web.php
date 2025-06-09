<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TambahController;
use Illuminate\Support\Facades\Route;


// dd('web.php loaded'); // Tambahkan di paling atas
Route::get('/', [AdminController::class, 'index'] )->name('Admin');
Route::get('/tambahbarang', [TambahController::class, 'index'])->name('Tambah');
Route::post('/tambahbarang', [TambahController::class, 'tambah']);
