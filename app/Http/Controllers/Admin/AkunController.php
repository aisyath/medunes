<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class AkunController extends Controller
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
        $akun = DB::table('users')->get();
        return view('admin.akun', ['akun' => $akun]);
    }
}