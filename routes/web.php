<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;



// Route::get('/', function () {
//     return view('layouts.dashboard'); // Untuk auth
// });

Route::get('/', function () {
    return view('layouts.auth'); // Untuk auth
});

Route::get('/dashboard', function () {
    return view('admin.dashboard'); // Untuk admin
});

Route::get('/mahasiswa', function () {
    return view('admin.mahasiswa'); // Daftar mahasiswa
});

Route::get('/jumlah-pemeriksaan', function () {
    return view('admin.jumlah_pemeriksaan'); // Jumlah pemeriksaan
});

Route::get('/total-pasien', function () {
    return view('admin.total_pasien'); // Total pasien
});

Route::get('/pemeriksaan-hari-ini', function () {
    return view('admin.pemeriksaan_hari_ini'); // Pemeriksaan hari ini
});

