@extends('layouts.head')

<body>

@extends('layouts.header')

@extends('layouts.sidebaradmin')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Pasien</h1>
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
              <h5 class="card-title">Daftar Pasien</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th><b>ID</b></th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>TB</th>
                    <th>BB</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($pasien as $pasien)
                  <tr>
                    <td>{{ $pasien->id_pasien }}</td>
                    <td>{{ $pasien->NIK }}</td>
                    <td>{{ $pasien->user->name }}</td>
                    <td>{{ $pasien->jenis_kelamin }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>{{ $pasien->no_tlp }}</td>
                    <td>{{ $pasien->TB }}</td>
                    <td>{{ $pasien->BB }}</td>
                    <td><span>{{ $pasien->status }}</span></td>
                    <td>
                      <button type="button" class="btn btn-primary" style="font-size: 12px;" data-bs-toggle="modal" data-bs-target="#update{{ $pasien->id_pasien }}">
                        <div class="icon"><i class="ri-edit-2-fill"></i></div>
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="update{{ $pasien->id_pasien }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Status Pasien <strong>{{ $pasien->user->name }}</strong></h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="{{ route('pasien.update', $pasien->id_pasien) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label for="statuspasien" class="form-label">Status</label>
                                  <select class="form-select" id="statuspasien" name="status" aria-label="Default select example">
                                      <option selected>{{ $pasien->status }}</option>
                                      <option value="active">Active</option>
                                      <option value="suspend">Suspend</option>
                                  </select>
                                  @error('status')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                              </form>
                            </div>
                        </div>
                      </div>
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
<script src="{{ asset('assets/auth/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/quill/quill.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/auth/js/main.js') }}"></script>

</body>

</html>
