@extends('template')
@section('title', 'Tambah Data Pengguna')
@section('content')

    <form method="POST" action="" class="card">
        @csrf
        <div class="card-body">
            <h4 class="card-title">TAMBAH DATA PENGGUNA</h4>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama</label>
                        <input type="text" class="form-control @error('nama_mahasiswa') is-invalid @enderror"
                            value="{{ old('nama_mahasiswa') }}" name="nama_mahasiswa" id="nama_mahasiswa">
                        @error('nama_mahasiswa')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nim_mahasiswa">Username</label>
                        <input type="text" class="form-control @error('nim_mahasiswa') is-invalid @enderror"
                            value="{{ old('nim_mahasiswa') }}" name="nim_mahasiswa" id="nim_mahasiswa">
                        @error('nim_mahasiswa')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="id_jurusan">Nama Bank</label>
                        <select name="id_jurusan" id="id_jurusan"
                            class="form-select @error('id_jurusan') is-invalid @enderror" value="{{ old('id_jurusan') }}">
                            @foreach ($jurusan as $get)
                                <option value="{{ $get->id_jurusan }}">- {{ $get->nama_jurusan }}</option>
                            @endforeach
                        </select>
                        @error('id_jurusan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nama_rekening">Nama Rekening</label>
                        <input type="text" class="form-control @error('nama_rekening') is-invalid @enderror"
                            value="{{ old('nama_rekening') }}" name="nama_rekening" id="nama_rekening">
                        @error('nama_rekening')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="no_rek">No Rekening</label>
                    <input type="text" class="form-control @error('no_rek') is-invalid @enderror"
                        value="{{ old('no_rek') }}" name="no_rek" id="no_rek">
                    @error('no_rek')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                 <div class="col-lg-6">
                 <div class="form-group" >
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                value="L" name="jenis_kelamin" id="jenkel1">
                            <label for="jenkel" class="form-check-label">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                value="P" name="jenis_kelamin" id="jenkel2">
                            <label for="jenkel2" class="form-check-label">
                                Perempuan
                            </label>
                        </div>
                        @error('jenis_kelamin')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                </div>


            </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
                            value="{{ old('tgl_lahir') }}" name="tgl_lahir" id="tgl_lahir">
                        @error('tgl_lahir')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="">
                <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Simpan</button>
                <a href="/mahasiswa" class="btn btn-success">kembali</a>
            </div>
        </div>
    </form>
@endsection
