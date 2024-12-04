@extends('layouts.head')

<body>


@extends('layouts.sidebardosen')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Dokter</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar Dokter</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p>

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
                    <th>Jumlah Konsultasi</th>
                    {{-- <th ></th>
                    <th ></th> --}}
                    <th></th>
                    <th></th>
                    <th>Action</th>
                    <th></th>
                    <th></th>


                    {{-- <th ></th>
                    <th ></th> --}}
                    
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
                               
                                    <!-- Penilaian Modal -->
                    <button type="button" class="btn btn-primary" style="font-size: 12px;" data-bs-toggle="modal" data-bs-target="#penilaianModal">
                      <div class="icon"><i class="bi bi-pencil-square"></i></div>
                    </button>
                    <div class="modal fade" id="penilaianModal" tabindex="-1" data-bs-backdrop="false">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Penilaian</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="container p-3">
                            <form>
                              <div class="mb-3">
                                <label for="profesionalisme" class="form-label">Profesionalisme</label>
                                <input type="text" class="form-control" id="profesionalisme">
                              </div>
                              <div class="mb-3">
                                <label for="konten" class="form-label">Konten</label>
                                <input type="text" class="form-control" id="konten">
                              </div>
                              <div class="mb-3">
                                <label for="komunikasi" class="form-label">Komunikasi</label>
                                <input type="text" class="form-control" id="komunikasi">
                              </div>
                              <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input type="number" class="form-control" id="rating">
                              </div>
                              <div class="mb-3">
                                <label for="feedback" class="form-label">Feedback</label>
                                <textarea class="form-control" id="feedback" style="height: 100px"></textarea>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Update Spesialisasi Dokter Modal -->
                    <button type="button" class="btn btn-primary" style="font-size: 12px;" data-bs-toggle="modal" data-bs-target="#updateModal">
                      <div class="icon"><i class="bi bi-eye-fill"></i></div>
                    </button>
                    <div class="modal fade" id="updateModal" tabindex="-1" data-bs-backdrop="false">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Update Spesialisasi Dokter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="container p-3">
                            <form>
                              <div class="mb-3">
                                <label for="spesialisasiId" class="form-label">Spesialisasi ID</label>
                                <input type="text" class="form-control" id="spesialisasiId">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- History Chat Modal -->
                    <button type="button" class="btn btn-primary" style="font-size: 12px;" data-bs-toggle="modal" data-bs-target="#historyModal">
                      <div class="icon"><i class="bi bi-trash-fill"></i></div>
                    </button>
                    <div class="modal fade" id="historyModal" tabindex="-1" data-bs-backdrop="false">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">History Chat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Non omnis incidunt qui sed occaecati magni asperiores est mollitia...</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

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