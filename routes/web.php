<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\Admin\PasienController;
use App\Http\Controllers\Admin\DosenController; 
use App\Http\Controllers\Admin\DokterController; 
use App\Http\Controllers\Admin\KonsultasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SpesialisController;
use App\Http\Controllers\HomeDosenController;
use App\Http\Controllers\Dosen\MahasiswaController;
use App\Http\Controllers\Dosen\PenjadwalanController;
use App\Models\User;
 



// Route::get('/', function () {
//     return view('layouts.dashboard'); // Untuk auth
// });

Route::get('/', function () {
    return view('layouts.auth'); // Untuk auth
});
Route::get('/login', function () {
    return view('layouts.login'); // Untuk auth
});

    Route::get('/dashboardadmin', [HomeController::class,'index']); // Untuk admin


Route::get('/dokter', function () {
    return view('admin.mahasiswa'); // Daftar mahasiswa
});

Route::get('/log', function () {
    return view('admin.log'); // Log Activity
});

Route::get('/dokter',[DokterController::class,'index']); // Log Activity
Route::get('/akun', [AkunController::class,'index']); // Log Activity;
Route::get('/dokterspesialis', [SpesialisController::class,'index']); // Log Activity
Route::get('/dosen',[DosenController::class,'index']); // dosen

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/spesialis', [SpesialisController::class,'dokter']);
Route::get('/penjadwalan',[PenjadwalanController::class,'index']);




Route::get('/logkonsultasi', function () {
    return view('dosen.logkonsultasi'); // dosen
});

Route::get('/jumlah-pemeriksaan', function () {
    return view('admin.jumlah_pemeriksaan'); // Jumlah pemeriksaan
});

Route::get('pasien',[PasienController::class,'index']);  // Total pasien
Route::get('konsultasipasien', [KonsultasiController::class,'index']); // Total pasien

Route::get('/pemeriksaan-hari-ini', function () {
    return view('admin.pemeriksaan_hari_ini'); // Pemeriksaan hari ini
});

Route::get('/dashboarddosen', [HomeDosenController::class,'index']); // dosen
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