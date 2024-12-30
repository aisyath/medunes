<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Rating;
use App\Models\Activity;
use App\Models\Catatan;
use App\Models\UserDokter;
use Illuminate\View\View;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Diskusi;
use App\Models\Janji;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class DokterController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // $data = Dokter::all();
        // return view('backend.dokter.list_dokter', compact('data'));
        // $konsultasi = Konsultasi::all();
        // $dokter = DB::table('user_dokter')->get();
        $dokter = Dokter::with('user')->orderBy('id_dokter', 'asc')->get();
        $dokter = Dokter::with('konsultasi', 'rating')->get();
        return view('admin.dokter', compact('dokter'));
    }

    // public function create()
    // {
    //     return view('backendadmin.dokter.create_dokter');
    // }

    // public function store(Request $request): RedirectResponse
    // {
    //     //upload image
    //     $image = $request->file('img_dokter');
    //     $path = 'asset/' . $image->getClientOriginalName();
    //     Storage::disk('public')->put($path, file_get_contents($image));


    //     Dokter::create([
    //         'user_id' => $request->user_id,
    //         'nama_dokter' => $request->nama_dokter,
    //         'nim' => $request->nim,
    //         'poli_id' => $request->poli_id,
    //         'img_dokter' => $path,
    //         'alamat' => $request->alamat,
    //         'no_tlp' => $request->no_tlp,
    //         'tempat_kerja' => $request->tempat_kerja,
    //         'tahun_lulus' => $request->tahun_lulus,
    //         'tgl_mulai_aktif' => $request->tgl_mulai_aktif,
    //         'alumni_kampus' => $request->alumni_kampus,
    //         'no_reg' => $request->no_reg,
    //         'jenis_kelamin' => $request->jenis_kelamin,
    //         'status' => $request->status
    //     ]);
    //     return redirect()->route('listdokter')->with('success', 'dokter berhasil ditambahkan!');

    // }

    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'id' => 'required|integer',
    //         'spesialis_id' => 'required|integer',
    //         'img_dokter' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'alamat' => 'required|string|max:255',
    //         'no_tlp' => 'required|string|max:15',
    //         'nim' => 'required|string|max:20',
    //         'jenis_kelamin' => 'required|in:L,P',
    //         'status' => 'required|in:Pending,Approve,Reject,Suspend',
    //     ]);

    //     $path = 'default/dokter.png'; // Nilai default jika gambar tidak diunggah

    //     //upload image
    //     if ($request->hasFile('img_dokter')) {
    //         $image = $request->file('img_dokter');
    //         $path = 'asset/' . $image->getClientOriginalName();
    //         Storage::disk('public')->put($path, file_get_contents($image));
    //     }

    //     $dokter = Dokter::find($id);
    //     $dokter->update($request->all());

    //     // Dokter::create([
    //     //     'id' => $request->id,
    //     //     'spesialis_id' => $request->spesialis_id,
    //     //     'img_dokter' => $path,
    //     //     'alamat' => $request->alamat,
    //     //     'no.tlp' => $request->notlp,
    //     //     'alumni_kampus' => $request->alumni_kampus,
    //     //     'nim' => $request->nim,
    //     //     'jenis_kelamin' => $request->jenis_kelamin,
    //     //     'status' => $request->status
    //     // ]);
    //     return redirect()->route('listdokter')->with('success', 'Dokter berhasil ditambahkan!');

    // }

    // public function edit($id)
	// {
    //     // $dokter = Dokter::find($id);
    //     // dd($dokter);
    //     $dokter = Dokter::with('user')->where('id', $id)->first();
    //     return view('backendadmin.dokter.update_dokter', compact('dokter'));

	// }
    
    public function update(Request $request, $id)
    {
        $dokter = Dokter::where('id_dokter', $id)->first();

        $request->validate([
            'id' => 'required|integer',
            'spesialis_id' => 'required|integer',
            'img_dokter' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alamat' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:15',
            'nim' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:L,P',
            'status' => 'required|in:Pending,Approve,Reject,Suspend',
        ]);

        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('img_dokter')) {
            $image = $request->file('img_dokter');
            $image->storeAs('public/asset', $image->hashName());
            $dokter->img_dokter = 'asset/' . $image->hashName();
        }

        // Update data lainnya
        // Update data lainnya
        // $dokter->id_dokter = $request->id_dokter;
        // $dokter->name = $request->nama_dokter;
        $dokter->spesialis_id = $request->spesialis_id;
        $dokter->alamat = $request->alamat;
        $dokter->no_tlp = $request->no_tlp;
        $dokter->nim = $request->nim;
        $dokter->jenis_kelamin = $request->jenis_kelamin;
        $dokter->status = $request->status;
        $dokter->save();
        // return redirect()->back()->with('success', 'Rating successfully submitted.');
        return redirect()->back()->with('success', 'dokter berhasil diupdate!');
        // return redirect()->route('listdokter')->with('message', 'dokter berhasil diupdate!');
    }


    // public function show($id)
    // {
    //     // Mengambil data dokter berdasarkan id_dokter
    //     $dokter = Dokter::with('user')->where('id', $id)->first();

    //     return view('backendadmin.dokter.show', compact('dokter'));
    // }

    public function destroy($id)
    {

        $konsultasiid=Konsultasi::where('dokter_id', $id)->get();
        if ($konsultasiid==null) {
            Dokter::destroy($id);
            return redirect('/list_dokter')->with('message_delete', 'dokter berhasil dihapus!');
        }
        // Diskusi::where('konsultasi_id', $konsultasiid->id_konsultasi)->delete();
        // // Catatan::where('konsultasi_id', $konsultasiid->id_konsultasi)->delete();
        // Janji::where('dokter_id', $id)->delete();
        // Konsultasi::where('dokter_id', $id)->delete();
        
        return redirect('/list_dokter')->with('message_delete', 'dokter gagal dihapus!');
    }

    public function getHistory($id)
    {
        $dokter = Dokter::with('user', 'konsultasi.pasien.user')->where('id', $id)->first();

        return view('backendadmin.dokter.history_dokter', compact('dokter'));
    }

    public function showRatingForm($id)
    {
        $dokter = Dokter::with('user')->where('id', $id)->first();
        $rating = Rating::where('dokter_id', $id)->latest()->first();
        // $rating = Rating::where('dokter_id', $id)->get();

        return view('backendadmin.dokter.rating_dokter', compact('dokter', 'rating'));
    }



    public function storeRating(Request $request, $id)
    {
        $request->validate([
            'profesionalisme' => 'required|numeric|min:1|max:5',
            'konten' => 'required|numeric|min:1|max:5',
            'komunikasi' => 'required|numeric|min:1|max:5',
            'rating' => 'required|numeric|min:1|max:5',
            'feedback' => 'required|string',
        ]);

        // Process and store the rating data
        $dokter = Dokter::with('user')->where('id', $id)->first();

        $rating = new Rating();
        $rating->profesionalisme = $request->input('profesionalisme');
        $rating->konten = $request->input('konten');
        $rating->komunikasi = $request->input('komunikasi');
        $rating->rating = $request->input('rating');
        $rating->feedback = $request->input('feedback');
        $rating->dokter_id = $id; // Use the correct column name
        $rating->save();
        $rating->load('dokter'); // Mengambil relasi dokter yang terhubung dengan rating

        return redirect()->back()->with('success', 'Rating successfully submitted.')->with('rating', $rating);

    }

    public function activities()
    {
        return $this->hasMany(Activity::class, 'user_dokter_id');
    }

}
