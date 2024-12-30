<div class="modal fade" id="edit{{ $dokter->id_dokter }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modal-editLabel">Edit Dokter <strong>{{ $dokter->user->name }}</strong></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> 
        <div class="modal-body">
        <form action="{{ route('dokter.update', $dokter->id_dokter) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $dokter->id_dokter }}"/>

    <div class="mb-3">
        <label for="userID" class="form-label">ID User</label>
        <input type="number" id="v_id_user" class="form-control @error('id') is-invalid @enderror" name="user_id" value="{{ $dokter->user->id }}"/>
        @error('id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="spesialisID" class="form-label">Spesialis ID</label>
        <input type="number" id="v_id_spesialis" class="form-control @error('spesialis_id') is-invalid @enderror" name="spesialis_id" value="{{ $dokter->spesialis_id }}"/>
        @error('spesialis_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="namadokter" class="form-label">Nama Dokter</label>
        <input type="text" id="v_nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ $dokter->user->name }}" />
        @error('nama_dokter')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="img_dokter" class="form-label" >Image Dokter</label>
        <input type="file" class="form-control mb-4 @error('img_dokter') is-invalid @enderror" id="v_img_spesialis" name="img_dokter">
        <img src="{{ asset('storage/' . $dokter->img_dokter) }}" alt="Gambar Dokter" width="100">
        @error('img_dokter')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="alamatdokter" class="form-label" >Alamat</label>
        <input type="text" id="v_alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $dokter->alamat }}" />
        @error('alamat')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="notelpon" class="form-label" >No. Tlp</label>
        <input type="text" id="v_no_tlp" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ $dokter->no_tlp }}" />
        @error('no_tlp')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="nim" class="form-label" >NIM</label>
        <input type="text" id="v_no_reg" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ $dokter->nim }}" />
        @error('nim')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label" >Jenis Kelamin</label>
        <select class="form-select" id="v_jenis_kelamin" name="jenis_kelamin" aria-label="Default select example">
            <option selected>{{ $dokter->jenis_kelamin }}</option>
            <option value="L" {{ $dokter->jenis_kelamin == 'L' ? 'selected' : '' }}>L</option>
            <option value="P" {{ $dokter->jenis_kelamin == 'P' ? 'selected' : '' }}>P</option>
        </select>
        @error('jenis_kelamin')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="statusdokter" class="form-label" >Status</label>
        <select class="form-select" id="v_status" name="status" aria-label="Default select example">
            <option selected>{{ $dokter->status }}</option>
            <option value="Pending" {{ $dokter->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Approve" {{ $dokter->status == 'Approve' ? 'selected' : '' }}>Approve</option>
            <option value="Reject" {{ $dokter->status == 'Reject' ? 'selected' : '' }}>Reject</option>
            <option value="Suspend" {{ $dokter->status == 'Suspend' ? 'selected' : '' }}>Suspend</option>
        </select>
        @error('status')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div> -->
      </div>
    </div>
  </div>
  
  <script>
    CKEDITOR.replace( 'content' );
  </script>
