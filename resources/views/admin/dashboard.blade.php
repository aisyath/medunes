@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.sidebar')
@extends('layouts.footer')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Dosen</title>
    <link rel="stylesheet" href="D:\laragon\www\laraadminpanel\resources\css\app.css">
</head>
<body>
    <!-- Navbar untuk dosen -->
    <nav>
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/mahasiswa">Mahasiswa</a></li>
            <li><a href="/penilaian">Penilaian</a></li>
            <li><a href="/log_konsultasi">Log Konsultasi</a></li>
            <li><a href="/ploting_jadwal">Ploting Jadwal</a></li>
            <li><a href="/log_activity">Log Activity</a></li>
            <li><a href="/logout">Log Out</a></li>
        </ul>
    </nav>

    <!-- Isi Dashboard Dosen -->
    <h1>Dashboard Dosen</h1>
    <div class="container">
        <button onclick="location.href='/mahasiswa'">Mahasiswa</button>
        <button onclick="location.href='/pemeriksaan'">Jumlah Pemeriksaan</button>
        <button onclick="location.href='/pemeriksaan_hari_ini'">Pemeriksaan Hari Ini</button>
    </div>
</body>
</html>

@endsection
