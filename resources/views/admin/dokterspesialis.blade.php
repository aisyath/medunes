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
            <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Daftar Dokter Spesialis</h5>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#CreateSpesialis">
              Tambah Spesialis
            </button>
            </div>
            
            
            <!-- Modal Create Spesialis -->
<form method="POST" action="{{ route('spesialis.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="CreateSpesialis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="CreateSpesialisLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="CreateSpesialisLabel">Tambah Spesialis</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-outline mb-4">
            <label class="form-label" for="nama_spesialis">Nama Spesialis</label>
            <input type="text" id="nama_spesialis" class="form-control @error('nama_spesialis') is-invalid @enderror" name="nama_spesialis" />
            @error('nama_spesialis')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="img_spesialis">Image Spesialis</label>
            <input type="file" id="img_spesialis" class="form-control @error('img_spesialis') is-invalid @enderror" name="img_spesialis" />
            @error('img_spesialis')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </div>
    </div>
  </div>
</form>
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
                @foreach ($spesialis as $item)
                <tr>
                  <th scope="row">{{ $item->id_spesialis }}</th>
                  <td>{{ $item->nama_spesialis }}</td>
                  <td><img src="{{ asset('assets/' . $item->img_spesialis) }}" alt="{{ $item->nama_spesialis }}" width="100"></td>
                  <td>
                  <a href="#delete{{ $item->id_spesialis ?? '' }}" class="btn btn-danger btn-sm" data-bs-toggle="modal">

                      <i class="bi bi-trash-fill"></i>
                    </a>
                      <!-- Modal -->
                    <div class="modal fade" id="delete{{ $item->id_spesialis }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="hapusKonsultasiLabel" aria-hidden="true">
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
    <form action="{{ route('spesialis.destroy', $item->id_spesialis) }}" method="POST">
        @csrf  <!-- Add this line -->
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
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
