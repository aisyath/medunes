<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Konsultasi;
use App\Models\Role;

class HomeDosenController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */  
    public function index()
    {
        $dokters = Dokter::count();
        $pasiens = Pasien::count();
        $konsultasis = Konsultasi::count();

        // konsultasi hari ini
        $tanggalHariIni = Carbon::today();
        $konsultasitoday = Konsultasi::whereDate('created_at', $tanggalHariIni)->count();


        return view('dosen.dashboarddosen', compact('dokters', 'pasiens', 'konsultasis', 'konsultasitoday'));
    }
}
