@extends('template')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">DATA ADMIN</h4>
            <a href="/operator_tambah" class="btn btn-dark btn-sm mb-4">TAMBAH DATA ADMIN</a>

            <div class="table-responnsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($operator as $get)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $get->nama_operator }}</td>
                                <td>{{ $get->username }}</td>
                                <td>{{ $get->email_operator }}</td>
                                <td>{{ $get->no_telepon }}</td>
                                <td>{{ $get->password_operator }}</td>
                                <td>
                                    <a href="/operator/{{ $get->id_operator }}/edit" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#confirm{{$get->id_operator}}">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>

                                    <div class="modal fade" id="confirm{{$get->id_operator}}" tabindex="-1"
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
                                                    Yakin Ingin Menghapus Data Operator dengan Nama
                                                    <b>{{ $get->nama_operator }}</b>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <a href="/operator/{{ $get->id_operator }}/hapus" class="btn btn-danger">Ya! Hapus.</a>
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
