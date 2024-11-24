<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Nice Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/jumlah-pemeriksaan') }}">Jumlah Pemeriksaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pemeriksaan-hari-ini') }}">Pemeriksaan Hari Ini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/total-pasien') }}">Total Pasien</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
