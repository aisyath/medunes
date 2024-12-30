<?php

namespace App\Http\Controllers\Admin;

use App\Models\Spesialis;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class SpesialisController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $spesialis = DB::table('spesialis')->get();
        return view('admin.dokterspesialis', ['spesialis' => $spesialis]);
    }

    public function dokter()
    {
        $spesialis = DB::table('spesialis')->get();
        return view('dosen.spesialisd', ['spesialis' => $spesialis]);
    }

    public function create()
    {
        return view('backendadmin.dokter.create_dokter');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_spesialis' => 'required|string|max:255',
            'img_spesialis' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $spesialis = new Spesialis();
        $spesialis->nama_spesialis = $request->nama_spesialis;
    
        if ($request->hasFile('img_spesialis')) {
            $image = $request->file('img_spesialis');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/spesialis'), $imageName);
            $spesialis->img_spesialis = $imageName;
        }
    
        $spesialis->save();
    
        return redirect()->back()->with('success', 'Spesialis berhasil ditambahkan');
    }

    public function destroy(int $id)
    {
        Spesialis::destroy($id);
        return redirect('/dokterspesialis')->with('success', 'Spesialis berhasil dihapus!');
    }

    // // create spesialis
    // /**
    //  * create
    //  *
    //  * @return View
    //  */
    // public function create(): View
    // {
    //     return view('backend.spesialis.create_spesialis');
    // }

    // /**
    //  * store
    //  *
    //  * @param  mixed $request
    //  * @return RedirectResponse
    //  */
    // public function store(Request $request): RedirectResponse
    // {
    //     //validate form
    //     $this->validate($request, [
    //         'nama_spesialis' => 'required',
    //         'img_spesialis'     => 'required|image|mimes:jpeg,jpg,png|max:2048'
    //     ]);

    //     //upload image
    //     $image = $request->file('img_spesialis');
    //     $image->storeAs('public', $image->hashName());

    //     //create post
    //     Spesialis::create([
    //         'nama_spesialis' => $request->nama_spesialis,
    //         'img_spesialis'     => $image->hashName()
    //     ]);

    //     //redirect to index
    //     return redirect()->route('spesialis.store')->with(['success' => 'Data Berhasil Disimpan!']);
    // }

}
