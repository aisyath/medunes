<?php

namespace App\Http\Controllers\dashboarddosen;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function showRatingForm($id)
    {
        $dokter = Dokter::findOrFail($id);
        return view('dashboarddosen.rating.rating_form', compact('dokter'));
    }

    public function storeRating(Request $request, $id)
    {
        $request->validate([
            'profesionalisme' => 'required|numeric|min:1|max:5',
            'konten' => 'required|numeric|min:1|max:5',
            'komunikasi' => 'required|numeric|min:1|max:5',
            'global_rating' => 'required|numeric|min:1|max:5',
            'feedback' => 'required|string',
        ]);

        Rating::create([
            'dokter_id' => $id,
            'user_id' => auth()->id(),
            'profesionalisme' => $request->input('profesionalisme'),
            'konten' => $request->input('konten'),
            'komunikasi' => $request->input('komunikasi'),
            'global_rating' => $request->input('global_rating'),
            'feedback' => $request->input('feedback'),
        ]);

        return redirect()->route('dokter.show', $id)->with('success', 'Rating berhasil disimpan.');
    }
}

