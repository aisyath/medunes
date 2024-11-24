@extends('layouts.head')
@extends('layouts.header')
@extends('layouts.sidebar')
@extends('layouts.footer')

@section('content')
<div class="container">
    <h1>Daftar Mahasiswa</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop melalui mahasiswa di sini -->
            <tr>
                <td>1</td>
                <td>Nama Mahasiswa</td>
                <td>mahasiswa@example.com</td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
