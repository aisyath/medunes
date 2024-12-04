<?php

namespace App\Http\Controllers\Dosen;

use App\Models\Dokter;
use App\Models\Sesi;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\DB;

class PenjadwalanController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $dokter = Dokter::with('user')->orderBy('id_dokter', 'asc')->get();
        return view('dosen.penjadwalan', compact('dokter'));
    }

    public function store(Request $request): RedirectResponse
    {
        dokter::create($request->all());
        return redirect()->route('listPenjadwalan')->with('success', 'dokter berhasil ditambahkan!');

    }

    public function edit($id)
	{
        $dokter = Dokter::find($id);
        return view('dashboarddosen.penjadwalan.edit_penjadwalan', compact('dokter'));

	}


    public function update(Request $request, $id)
    {
        $dokters = dokter::find($id);
        $dokters->update($request->all());
        return redirect()->back()->with('success', 'Status dokter berhasil diubah');
        // $dokters->status = $request->status;

        // $dokters->save();

    }

    public function storeSesi(Request $request, $dokterId)
    {
        $request->validate([
            'day' => 'required',
            'dari' => 'required',
            'sampai' => 'required'
        ]);

        Sesi::create([
            'dokter_id' => $dokterId,
            'day' => $request->day,
            'dari' => $request->dari,
            'sampai' => $request->sampai
        ]);

        return redirect()->back()->with('success', 'Sesi berhasil ditambahkan');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class, 'user_dokter_id');
    }

    // public function updateStatus(Request $request, $id)
    // {
    //     $pasien = Pasien::find($id);
    //     $pasien->status = $request->input('status');
    //     $pasien->save();

    //     return redirect()->back()->with('success', 'Status pasien berhasil diubah');
    // }
}
