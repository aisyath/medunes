@extends('layouts.head')
<body>

@extends('layouts.header')

@extends('layouts.sidebaradmin')

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
                    <th>Nama Spesialis</th>
                    <th>Action</th>
                    <th></th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach ($spesialis as $spesialis)
                  <tr>
                    <td>{{ $spesialis->id_spesialis }}</td>
                    <td>{{ $spesialis->nama_spesialis }}</td>
                    <td>
                      <button type="button" class="btn btn-primary" style="font-size: 12px;" data-bs-toggle="modal" data-bs-target="#disablebackdrop">
                        <div class="icon"><i class="ri-delete-bin-2-fill"></i></div>
                    </button>
                
                          <div class="modal fade" id="disablebackdrop" tabindex="-1" data-bs-backdrop="false">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Disabled Backdrop</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div> 
                          </td></td>
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