@extends('layouts.head')

<body>


 
@extends('layouts.header')
  @extends('layouts.sidebardosen')

  <main id="main" class="main">

<div class="pagetitle">
  <h1>Daftar Dokter Spesialis</h1>
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
          <h5 class="card-title">Daftar Dokter Spesialis</h5>
          
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead class="table-info">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama spesialis</th>
                <th scope="col">Img spesialis</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($spesialis as $spesialis)
                <tr>
                    <th scope="row">{{ $spesialis->id_spesialis }}</th>
                    <td>{{ $spesialis->nama_spesialis }}</td>
                    <td><img src="{{ asset('assets/' . $spesialis->img_spesialis) }}" alt="{{ $spesialis->nama_spesialis }}" width="50"></td>
                      <td>
                        
                            <!-- <a href="#delete{{ $spesialis->id_spesialis }}" class="btn btn-danger btn-sm " data-bs-toggle="modal">
                                <i class="bi bi-trash-fill"></i>
                            </a> -->
                            <a href="{{ route('listmahasiswa', ['spesialis_id' => $spesialis->id_spesialis]) }}" class="btn btn-info btn-sm">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                    
                   
                    </td> 
                </tr>
            @endforeach
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

  @extends('layouts.footer')

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