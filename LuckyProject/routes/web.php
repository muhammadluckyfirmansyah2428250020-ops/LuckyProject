<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
});
Route::resource('/fakultas', FakultasController::class);

Route::resource('/periodes', PeriodeController::class);

Route::resource('/prodi', ProdiController::class);

Route::resource('/mahasiswa', MahasiswaController::class);
