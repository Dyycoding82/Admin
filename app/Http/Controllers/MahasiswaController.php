<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['mahasiswa'] = MahasiswaModel::getAllMahasiswa()->get();
        $data['no'] = 1;
        return view('mahasiswa.mahasiswa', $data);
    }

    public function tambah()
    {
        $data['jurusan'] = JurusanModel::all();
        return view('mahasiswa.mahasiswa_tambah', $data);
    }

    public function tambah_action(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim_mahasiswa' => 'required',
            'id_jurusan' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'nama_rekening' => 'required',
            'no_rek' => 'required'
        ]);

        $data = [
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim_mahasiswa' => $request->nim_mahasiswa,
            'id_jurusan' => $request->id_jurusan,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_rekening' => $request->nama_rekening,
            'no_rek' => $request->no_rek
        ];

        MahasiswaModel::create($data);
        return redirect('/mahasiswa')->with(['success' => 'Berhasil Menyimpan Data Mahasiswa']);
    }

    public function hapus($id)
    {
        MahasiswaModel::where('id_mahasiswa', $id)->delete();
        return redirect('/mahasiswa')->with(['success' => 'Berhasil Menghapus Data Mahasiswa']);
    }

    public function edit($id)
    {
        $data['detail'] = MahasiswaModel::where('id_mahasiswa', $id)->first();
        $data['jurusan'] = JurusanModel::all();
        return view('mahasiswa.mahasiswa_edit', $data);
    }

    public function edit_action($id, Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required',
            'nim_mahasiswa' => 'required',
            'id_jurusan' => 'required',
            'tgl_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'nama_rekening' => 'required',
            'no_rek' => 'required'
        ]);

        $data = [
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim_mahasiswa' => $request->nim_mahasiswa,
            'id_jurusan' => $request->id_jurusan,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_rekening' => $request->nama_rekening,
            'no_rek' => $request->no_rek
        ];

        MahasiswaModel::where('id_mahasiswa', $id)->update($data);
        return redirect('/mahasiswa')->with(['success' => 'Berhasil Mengubah Data Mahasiswa']);
    }
}
