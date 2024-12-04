<?php

namespace App\Http\Controllers\dashboarddosen;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Konsultasi;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function showActivityLog()
    {
        $logs = Activity::with('dokter', 'pasien')->orderBy('created_at', 'desc')->get();
        return view('dashboarddosen.activity.activity', compact('logs'));
    }

    public function logKonsultasi()
    {
        $konsultasi = Konsultasi::with('dokter', 'pasien')->get();

        foreach ($konsultasi as $k) {
            Activity::create([
                'dokter_id' => $k->dokter_id,
                'pasien_id' => $k->pasien_id,
                'activity_type' => 'Consultation',
                'description' => 'Konsultasi antara dokter dengan ID: ' . $k->dokter_id . ' dan pasien dengan ID: ' . $k->pasien_id,
            ]);
        }

        return redirect()->route('activity.log')->with('success', 'Konsultasi berhasil di-log.');
    }
}
