@extends('layouts.head')

<body>
@extends('layouts.header')
@extends('layouts.sidebardosen')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Log Konsultasi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    @if (session('success'))
    <div class="alert alert-warning" role="alert">
        {{ session('success') }}
    </div>
  @endif

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Log Aktivitas</h5>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($logs->isEmpty())
                            <p>Tidak ada aktivitas yang ditemukan.</p>
                        @else
                            <!-- Table with dynamic data -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Dokter</th>
                                        <th>Pasien</th>
                                        <th>Jenis Aktivitas</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($logs as $log)
                                        <tr>
                                        <td>{{ $log->dokter_id ? ($log->dokter?->user?->name ?? '-') : '-' }}</td>
                                        <td>{{ $log->pasien_id ? ($log->pasien?->user?->name ?? '-') : '-' }}</td>
                                            <td>{{ $log->activity_type }}</td>
                                            <td>{{ $log->description }}</td>
                                            <td>{{ $log->created_at->format('d M Y, H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with dynamic data -->
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>Medunnes</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@yield('script')
<!-- Vendor JS Files -->
<script src="assets/auth/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/auth/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/auth/vendor/chart.js/chart.umd.js"></script>
<script src="assets/auth/vendor/echarts/echarts.min.js"></script>
<script src="assets/auth/vendor/quill/quill.js"></script>
<script src="assets/auth/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/auth/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/auth/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/auth/js/main.js"></script>

</body>
</html>
