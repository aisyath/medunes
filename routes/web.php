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
Route::get('/login', function () {
    return view('layouts.login'); // Untuk auth
});

Route::get('/dashboardadmin', function () {
    return view('admin.dashboardadmin'); // Untuk admin
});

Route::get('/mahasiswa', function () {
    return view('admin.mahasiswa'); // Daftar mahasiswa
});

Route::get('/log', function () {
    return view('admin.log'); // Log Activity
});

Route::get('/dokter', function () {
    return view('admin.dokter'); // Log Activity
});
Route::get('/akun', function () {
    return view('admin.akun'); // Log Activity
});
Route::get('/dokterspesialis', function () {
    return view('admin.dokterspesialis'); // Log Activity
});
Route::get('/dosen', function () {
    return view('admin.dosen'); // dosen
});
Route::get('/penjadwalan', function () {
    return view('dosen.penjadwalan'); // dosen
});
Route::get('/logkonsultasi', function () {
    return view('dosen.logkonsultasi'); // dosen
});

Route::get('/jumlah-pemeriksaan', function () {
    return view('admin.jumlah_pemeriksaan'); // Jumlah pemeriksaan
});

Route::get('pasien', function () {
    return view('admin.pasien'); // Total pasien
});
Route::get('konsultasipasien', function () {
    return view('admin.konsultasipasien'); // Total pasien
});

Route::get('/pemeriksaan-hari-ini', function () {
    return view('admin.pemeriksaan_hari_ini'); // Pemeriksaan hari ini
});

Route::get('/dashboarddosen', function () {
    return view('dosen.dashboarddosen'); // dosen
});
Route::get('/mahasiswad', function () {
    return view('dosen.mahasiswad'); // dosen
});
Route::get('/spesialisd', function () {
    return view('dosen.spesialisd'); // dosen
});
Route::get('/profile', function () {
    return view('layouts.profile'); // dosen
});







Route::get('/index', function () {
    return view('website.index'); // webiste
});
Route::get('/starter', function () {
    return view('website.starter-page'); // webiste
});