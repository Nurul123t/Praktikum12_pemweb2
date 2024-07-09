<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Saya Nurhasanah siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});

// routes/web.php
Route::get('/about', function () {
    $data = [
        'nama' => 'Nurhasanah',
        'nim' => '0110223234',
        'program_studi' => 'Teknik Informatika',
        'tahun_angkatan' => '2023'
    ];
    return view('about', $data);
});


Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien/show', [PasienController::class, 'show'])->name('pasien.show');

Route::get('/pasien/index', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');