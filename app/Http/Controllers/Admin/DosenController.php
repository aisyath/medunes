<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class DosenController extends Controller
{
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logUnguarded();
        // Chain fluent methods for configuration options
    }
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {

        $dosen = Dosen::with('user')->orderBy('id_dosen', 'asc')->get();
        return view('Admin.dosen', compact('dosen'));
    }

    public function show($id)
    {
        $admin = User::findOrFail($id);
        return view('dashboarddosen.profile.profile', compact('admin'));
    }

}