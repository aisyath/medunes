@extends('layouts.head')

<body>
@extends('layouts.header')


  @extends('layouts.sidebardosen')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Penjadwalan</h1>
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
              <h5 class="card-title">Penjadwalan</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>ID</b>
                    </th>
                    <th>Nama Dokter</th>
                    <th>ID Spesialis</th>
                    <th>Status</th>
                    <th>Jumlah Konsultasi Pasien</th>
                    <th>Action</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                @foreach ($dokter as $dokter)
                  <tr>
                    <td>{{ $dokter->id_dokter }}</td>
                    <td>{{ $dokter->user->name }}</td>
                    <td>{{ $dokter->spesialis_id}}</td>
                    <td>{{ $dokter->status }}</td>
                    <td>{{ $dokter->konsultasi->count() }}</td>
                    
                    
                    <td>
                               
                        <button type="button" class="btn btn-primary" style="font-size: 12px;" data-bs-toggle="modal" data-bs-target="#disablebackdrop">
                          <div class="icon"><i class="ri-add-circle-fill"></i></div>
                      </button>
                   
                            <div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Tambah Sesi untuk dokter john</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="container p-3">
                                    <div class="row mb-3">
                                      <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                      <div class="col-sm-10">
                                        <input type="date" class="form-control">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                      <div class="col-sm-10">
                                        <input type="time" class="form-control">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label class="col-sm-2 col-form-label">Durasi</label>
                                      <div class="col-sm-10">
                                        <select class="form-select" multiple aria-label="multiple select example">
                                          <option selected>Open this select menu</option>
                                          <option value="1">satu jam</option>
                                          <option value="2">dua jam</option>
                                          <option value="3">tiga jam</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
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