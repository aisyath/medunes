<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pasien;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $pasien = Pasien::with('user')->orderBy('id_pasien', 'asc')->get();
        return view('Admin.Pasien', compact('pasien'));
    }

    public function store(Request $request): RedirectResponse
    {
        Pasien::create($request->all());
        return redirect()->route('pasien')->with('success', 'Pasien berhasil ditambahkan!');

    }

    public function edit($id)
	{
        $pasiens = Pasien::find($id);
        return view('backendadmin.pasien.edit_pasien', compact('pasien'));

	}


    // update status
    public function update(Request $request, $id)
    {
        $pasiens = Pasien::find($id);
        $pasiens->update($request->all());

        // $pasiens->status = $request->status;

        // $pasiens->save();

        return redirect()->route('pasien')->with('success', 'Status berhasil diupdate!');
    }

    public function activities()
    {
        return $this->hasMany(Activity::class, 'user_pasien_id');
    }

    public function updateStatus(Request $request, $id)
    {
        $pasien = Pasien::find($id);
        $pasien->status = $request->input('status');
        $pasien->save();

        return redirect()->back()->with('success', 'Status pasien berhasil diubah');
    }
}
