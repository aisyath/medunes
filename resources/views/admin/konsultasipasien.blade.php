@extends('layouts.head')

<body>

@extends('layouts.header')

@extends('layouts.sidebaradmin')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Konsultasi Pasien</h1>
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
              <h5 class="card-title">Daftar Konsultasi</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>
                    </th>
                    <th>ID Pasien</th>
                    <th>ID Dokter</th>
                    <th>Topik</th>
                    <th>Waktu Konsultasi</th>
                    <th>Action</th>
                    <th></th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                @foreach ($konsultasi as $konsultasi)
                  <tr>
                    <td>{{ $konsultasi->id_konsultasi }}</td>
                    <td>{{ $konsultasi->pasien_id }}</td>
                    <td>{{ $konsultasi->dokter_id }}</td>
                    <td>{{ $konsultasi->topik }}</td>
                    <td>{{ $konsultasi->created_at }}</td>
                   
                    <td>
                    <a href="#delete{{ $konsultasi->id_konsultasi }}" class="btn btn-danger btn-sm" data-bs-toggle="modal">
                      <i class="bi bi-trash-fill"></i>
                    </a>
                      <!-- Modal -->
                    <div class="modal fade" id="delete{{ $konsultasi->id_konsultasi}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="hapusKonsultasiLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="hapusKonsultasiLabel">Hapus Poli</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Apakah anda yakin ingin menghapus spesialis ini?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <form action="{{ route('konsultasi.destroy', $konsultasi->id_konsultasi) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                          </div>
                        </div>
                      </div> 
                            </td></td>
                        </tr>
                        <tr>
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