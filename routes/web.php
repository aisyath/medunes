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
use App\Http\Controllers\Dosen\ActivityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Models\User;
 



// Route::get('/', function () {
//     return view('layouts.dashboard'); // Untuk auth
// });

Route::get('/', function () {
    return view('auth.login'); // Untuk auth
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/registrasi', [RegistrasiController::class,'showRegistrationForm'])->name('registrasi');
Route::post('/registrasi', [RegistrasiController::class, 'registrasi']);


Route::get('/dashboardadmin', [HomeController::class,'index']); // Untuk admin

Route::get('admin', function() {
    return view('/dashboardadmin');
  })->middleware('auth', 'verified', 'role:admin');
Route::get('/dokter', function () {
    return view('admin.mahasiswa'); // Daftar mahasiswa
});

Route::get('/log', function () {
    return view('admin.log'); // Log Activity
});

Route::get('/pasien/{id}', [PasienController::class,'edit'])->name('pasien.edit');
Route::post('/update_pasien/{id}', [PasienController::class, 'update'])->name('pasien.update');


Route::delete('/hapus_spesialis/{id}', [SpesialisController::class,'destroy'])->name('spesialis.destroy');

Route::get('/dokter',[DokterController::class,'index']);
Route::get('/update_dokter/{id}',[DokterController::class,'update'])->name('dokter.update'); // Log Activity
Route::get('/akun', [AkunController::class,'index']); // Log Activity;
Route::get('/dokterspesialis', [SpesialisController::class,'index']); // Log Activity
Route::post('/dokterspesialis', [SpesialisController::class, 'store'])->name('spesialis.store');

Route::get('/dosen',[DosenController::class,'index']); // dosen

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/list_mahasiswa', [MahasiswaController::class, 'index'])->name('listmahasiswa');
Route::post('/update_spesialis/{id}', [MahasiswaController::class, 'updateSpesialis'])->name('dokter.updateSpesialis');
Route::get('/spesialis', [SpesialisController::class,'dokter']);
Route::get('/penjadwalan',[PenjadwalanController::class,'index']);

Route::post('/dokter/{id}/rating', [DokterController::class, 'storeRating'])->name('dokter.addRating');

Route::delete('/hapus_dokter/{id}', [DokterController::class,'destroy'])->name('dokter.destroy');
Route::get('/dokter/{id}/history', 'DokterController@getHistory')->name('dokter.history');
Route::post('/update_dokter/{id}', [DokterController::class, 'update'])->name('dokter.update');
Route::get('/logkonsultasi', [ActivityController::class, 'showActivityLog'])->name('activity.log');

Route::delete('/hapus_konsultasi/{id}', [KonsultasiController::class,'destroy'])->name('konsultasi.destroy');

// Route::get('/logkonsultasi', function () {
//     return view('dosen.logkonsultasi'); // dosen
// });

Route::get('/jumlah-pemeriksaan', function () {
    return view('admin.jumlah_pemeriksaan'); // Jumlah pemeriksaan
});

Route::get('pasien',[PasienController::class,'index'])->name('pasien');  // Total pasien
Route::get('konsultasipasien', [KonsultasiController::class,'index']); // Total pasien

Route::get('/pemeriksaan-hari-ini', function () {
    return view('admin.pemeriksaan_hari_ini'); // Pemeriksaan hari ini
});


Route::get('/dashboarddosen',[HomeDosenController::class, 'index'])->name('homedosen');
Route::get('dosen', function() {
    return view('/dashboarddosen');
  })->middleware('auth', 'verified', 'role:dosen');


Route::get('/mahasiswad', function () {
    return view('dosen.mahasiswad'); // dosen
});
Route::get('/spesialisd', function () {
    return view('dosen.spesialisd'); // dosen
});
Route::get('/profile', function () {
    return view('layouts.profile'); // dosen
});



Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::get('/index', function () {
    return view('website.index'); // webiste
});
Route::get('/starter', function () {
    return view('website.starter-page'); // webiste
});

// Add new route for handling login form submission
Route::post('/masuk', [AuthController::class, 'login'])->name('masuk');

// Add new route for registration page
Route::get('/registrasi', [AuthController::class, 'showRegistrationForm'])->name('registrasi');

require __DIR__.'/auth.php';