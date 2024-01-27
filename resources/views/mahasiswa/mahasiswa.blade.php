@extends('template')
@section('title', 'Data Pengguna')
@section('content')

    <div class="card">

        <div class="card-body">

            <h4 class="card-title">DATA PENGGUNA</h4>


            <a href="/mahasiswa_tambah" class="btn btn-dark btn-sm mb-3">TAMBAH DATA PENGGUNA</a>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama Bank</th>
                            <th>Nama Rekening</th>
                            <th>No Rekening</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $get)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $get->nama_mahasiswa }}</td>
                                <td>{{ $get->nim_mahasiswa }}</td>
                                <td>{{ date('d-n-Y', strtotime($get->tgl_lahir)) }}</td>
                                <td>{{ $get->jenis_kelamin }}</td>
                                <td>{{ $get->nama_jurusan }}</td>
                                <td>{{ $get->nama_rekening }}</td>
                                <td>{{ $get->no_rek }}</td>
                                <td>
                                    <a href="/mahasiswa/{{ $get->id_mahasiswa }}/edit" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#confirm{{$get->id_mahasiswa}}">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>

                                    <div class="modal fade" id="confirm{{$get->id_mahasiswa}}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i
                                                        class="bi bi-trash"></i> Peringatan!</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin Ingin Menghapus Data Mahasiswa dengan Nama
                                                    <b>{{ $get->nama_mahasiswa }}</b>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <a href="/mahasiswa/{{ $get->id_mahasiswa }}/hapus" class="btn btn-danger">Ya! Hapus.</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
