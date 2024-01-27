@extends('template')
@section('title', 'Edit Nama Bank')
@section('content')

    <form method="POST" action="" class="card">
        @csrf

        <div class="card-body">
            <h4 class="card-title">EDIT DATA BANK</h4>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="nama_jurusan">Nama Jurusan</label>
                        <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror"
                            value="{{ old('nama_jurusan') ?? $detail->nama_jurusan }}" name="nama_jurusan" id="nama_jurusan">
                        @error('nama_jurusan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Simpan Perubahan</button>
                <a href="/jurusan" class="btn btn-danger">kembali</a>
            </div>

    </form>
@endsection
