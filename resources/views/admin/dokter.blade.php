@extends('layouts.head')
<body>

@extends('layouts.header')

@extends('layouts.sidebaradmin')

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
                    {{-- <th ></th>--}}
                    <th ></th> 
                    <th style="text-align: center; vertical-align: middle;">Action</th>
                    <th ></th>
                    <th ></th> 
                    
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
                    <td >
                    
                    <!-- Tombol Edit Dokter -->
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{ $dokter->id_dokter }}">
                        <i class="bi bi-pencil"></i>
                    </button>

                    <!-- Modal Edit Dokter -->
                    <div class="modal fade" id="edit{{ $dokter->id_dokter }}" tabindex="-1" aria-labelledby="editDokterModalLabel{{ $dokter->id_dokter }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editDokterModalLabel{{ $dokter->id_dokter }}">Edit Dokter: <strong>{{ $dokter->user->name }}</strong></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('dokter.update', $dokter->id_dokter) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="userID" class="form-label">ID User</label>
                                            <input type="number" id="userID" class="form-control" name="user_id" value="{{ $dokter->user->id }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="spesialisID" class="form-label">ID Spesialis</label>
                                            <input type="number" id="spesialisID" class="form-control" name="spesialis_id" value="{{ $dokter->spesialis_id }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="namadokter" class="form-label">Nama Dokter</label>
                                            <input type="text" id="namadokter" class="form-control" name="nama_dokter" value="{{ $dokter->user->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="img_dokter" class="form-label">Foto Dokter</label>
                                            <input type="file" id="img_dokter" class="form-control" name="img_dokter">
                                            <img src="{{ asset('storage/asset/' . $dokter->img_dokter) }}" alt="Foto Dokter" class="img-thumbnail mt-2" width="100">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamatdokter" class="form-label">Alamat</label>
                                            <input type="text" id="alamatdokter" class="form-control" name="alamat" value="{{ $dokter->alamat }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="notelpon" class="form-label">No. Telepon</label>
                                            <input type="text" id="notelpon" class="form-control" name="no_tlp" value="{{ $dokter->no_tlp }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                            <select id="jenis_kelamin" class="form-select" name="jenis_kelamin">
                                                <option value="L" {{ $dokter->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                                <option value="P" {{ $dokter->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="statusdokter" class="form-label">Status</label>
                                            <select id="statusdokter" class="form-select" name="status">
                                                <option value="Aktif" {{ $dokter->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                                <option value="Tidak Aktif" {{ $dokter->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                      </td>
                      <td >
                          <!-- Tombol Eye -->
                          <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" 
                              data-bs-target="#detailModal{{ $dokter->id_dokter }}">
                              <i class="bi bi-eye-fill"></i>
                          </button>

                          <!-- Modal Detail Dokter -->
                          <div class="modal fade" id="detailModal{{ $dokter->id_dokter }}" tabindex="-1" 
                              aria-labelledby="detailModalLabel{{ $dokter->id_dokter }}" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="detailModalLabel{{ $dokter->id_dokter }}">
                                              Detail Dokter: <strong>{{ $dokter->user->name }}</strong>
                                          </h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="row mb-2">
                                              <div class="col">ID Dokter</div>
                                              <div class="col"><button class="btn btn-outline-info btn-sm">{{ $dokter->id_dokter }}</button></div>
                                          </div>
                                          <div class="row mb-2">
                                              <div class="col">Nama Dokter</div>
                                              <div class="col"><button class="btn btn-outline-info btn-sm">{{ $dokter->user->name }}</button></div>
                                          </div>
                                          <div class="row mb-2">
                                              <div class="col">ID Spesialis</div>
                                              <div class="col"><button class="btn btn-outline-info btn-sm">{{ $dokter->spesialis_id }}</button></div>
                                          </div>
                                          <div class="row mb-2">
                                              <div class="col">Foto Dokter</div>
                                              <div class="col">
                                                  <img src="{{ asset('storage/asset/' . $dokter->img_dokter) }}" alt="Foto Dokter" width="100">
                                              </div>
                                          </div>
                                          <div class="row mb-2">
                                              <div class="col">Alamat</div>
                                              <div class="col"><button class="btn btn-outline-info btn-sm">{{ $dokter->alamat }}</button></div>
                                          </div>
                                          <div class="row mb-2">
                                              <div class="col">No. Telepon</div>
                                              <div class="col"><button class="btn btn-outline-info btn-sm">{{ $dokter->no_tlp }}</button></div>
                                          </div>
                                          <div class="row mb-2">
                                              <div class="col">Jenis Kelamin</div>
                                              <div class="col"><button class="btn btn-outline-info btn-sm">{{ $dokter->jenis_kelamin }}</button></div>
                                          </div>
                                          <div class="row mb-2">
                                              <div class="col">Status</div>
                                              <div class="col"><button class="btn btn-outline-info btn-sm">{{ $dokter->status }}</button></div>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </td>
                    <td>
                               
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{ $dokter->id_dokter }}">
                        <i class="bi bi-trash-fill"></i>
                    </button>
             
                      <!-- Modal Hapus Dokter -->
                    <div class="modal fade" id="delete{{ $dokter->id_dokter }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="hapusDokterLabel{{ $dokter->id_dokter }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="hapusDokterLabel{{ $dokter->id_dokter }}">Hapus Dokter</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus dokter <strong>{{ $dokter->user->name }}</strong>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('dokter.destroy', $dokter->id_dokter) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                      </td>
                    <td >
                               
                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" 
                        data-bs-target="#history{{ $dokter->id_dokter }}">
                        <i class="bi bi-chat-left-text-fill"></i>
                    </button>

             
                     <!-- Modal Show History -->
                    <div class="modal fade" id="history{{ $dokter->id_dokter }}" data-bs-backdrop="static" 
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        History Chat <strong>{{ $dokter->user->name }}</strong> dengan Pasien
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-header">
                                    <h4 class="modal-title fs-5">
                                        Jumlah Konsultasi <strong class="fs-4">{{ $dokter->konsultasi->count() }}</strong>
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    @foreach ($dokter->konsultasi as $k)
                                        <div class="row pt-3">
                                            <div class="col">ID Pasien</div>
                                            <div class="col">
                                                <button class="btn btn-outline-danger btn-sm">
                                                    {{ $k->pasien->user->name }}
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">ID Konsultasi</div>
                                            <div class="col">
                                                <button class="btn btn-outline-info btn-sm">
                                                    {{ $k->id_konsultasi }}
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">Konsultasi Pasien</div>
                                            <div class="col">
                                                <button class="btn btn-outline-info btn-sm">
                                                    {{ $k->topik }}
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                      </td>
                    <td >
                               
                   <!-- Penilaian Modal -->
                   <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#penilaianModal{{ $dokter->id_dokter }}">
                        <i class="bi bi-graph-up"></i>
                    </button>

                    <div class="modal fade" id="penilaianModal{{ $dokter->id_dokter }}" tabindex="-1" data-bs-backdrop="false">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Penilaian</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="container p-3">
                            <form action="{{ route('dokter.addRating', $dokter->id_dokter) }}" method="POST">
                              @csrf
                              <div class="mb-3">
                                <label for="profesionalisme" class="form-label">Profesionalisme</label>
                                <input type="number" class="form-control" id="profesionalisme" name="profesionalisme" required>
                              </div>
                              <div class="mb-3">
                                <label for="konten" class="form-label">Konten</label>
                                <input type="number" class="form-control" id="konten" name="konten" required>
                              </div>
                              <div class="mb-3">
                                <label for="komunikasi" class="form-label">Komunikasi</label>
                                <input type="number" class="form-control" id="komunikasi" name="komunikasi" required>
                              </div>
                              <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <input type="number" class="form-control" id="rating" name="rating" required>
                              </div>
                              <div class="mb-3">
                                <label for="feedback" class="form-label">Feedback</label>
                                <textarea class="form-control" id="feedback" name="feedback" style="height: 100px" required></textarea>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Create</button>
                              </div>
                            </form>
                            @if ($dokter->rating->count() > 0)
                              <h6 class="card-subtitle mb-2 text-muted">Riwayat Penilaian:</h6>
                              <ul class="list-group">
                                @foreach ($dokter->rating as $r)
                                  <li class="list-group-item">
                                    <p>ID: {{ $r->id_rating }}</p>
                                    <p>Profesionalisme: {{ $r->profesionalisme }}</p>
                                    <p>Konten: {{ $r->konten }}</p>
                                    <p>Komunikasi: {{ $r->komunikasi }}</p>
                                    <p>Global Rating: {{ $r->rating }}</p>
                                    <p>Feedback: {{ $r->feedback }}</p>
                                  </li>
                                @endforeach
                              </ul>
                            @else
                              <p class="card-text">Belum ada riwayat rating.</p>
                            @endif
                          </div>
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
