@extends('template')
@section('title', 'Tambah Operator')
@section('content')

    <form method="POST" action="" class="card">
        @csrf

        <div class="card-body">
            <h4 class="card-title">TAMBAH DATA OPERATOR</h4>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="nama_operator">Nama Operator</label>
                        <input type="text" class="form-control @error('nama_operator') is-invalid @enderror"
                            value="{{ old('nama_operator') }}" name="nama_operator" id="nama_operator">
                        @error('nama_operator')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                            value="{{ old('username') }}" name="username" id="username">
                        @error('username')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="email_operator">Email Operator</label>
                        <input type="email" class="form-control @error('email_operator') is-invalid @enderror"
                            value="{{ old('email_operator') }}" name="email_operator" id="email_operator">
                        @error('email_operator')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="no_telepon">No Telepon</label>
                            <input type="text" class="form-control @error('no_telepon') is-invalid @enderror"
                                value="{{ old('no_telepon') }}" name="no_telepon" id="no_telepon">
                            @error('no_telepon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="password_operator">Password</label>
                        <input type="password" class="form-control @error('password_operator') is-invalid @enderror"
                            value="{{ old('password_operator') }}" name="password_operator" id="password_operator">
                        @error('password_operator')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Simpan</button>
                <a href="/operator" class="btn btn-danger">kembali</a>
            </div>
        </div>
    </form>
@endsection
