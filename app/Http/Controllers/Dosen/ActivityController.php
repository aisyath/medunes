<?php

namespace App\Http\Controllers\dosen;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Konsultasi;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\User;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function showActivityLog()
    {
        
        $logs = Activity::with(['dokter', 'pasien', 'user'])->orderBy('created_at', 'desc')->get();
        return view('dosen.logkonsultasi', compact('logs'));
    }

    // public function logKonsultasi()
    // {
    //     $konsultasi = Konsultasi::with('dokter', 'pasien')->get();

    //     foreach ($konsultasi as $k) {
    //         Activity::create([
    //             'dokter_id' => $k->dokter_id,
    //             'pasien_id' => $k->pasien_id,
    //             'activity_type' => 'Consultation',
    //             'description' => 'Konsultasi antara dokter dengan ID: ' . $k->dokter_id . ' dan pasien dengan ID: ' . $k->pasien_id,
    //         ]);
    //     }

    //     return redirect()->route('activity.log')->with('success', 'Konsultasi berhasil di-log.');
    // }
}
