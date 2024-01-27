<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\JurusanModel;
use App\Models\MahasiswaModel;
use App\Models\OperatorModel;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

     public function Dashboard()
     {
        $total_admin = OperatorModel::count();
        $total_mahasiswa = MahasiswaModel::count();
        $total_jurusan = JurusanModel::count();
        $total_laki = MahasiswaModel::where('jenis_kelamin', 'L')->count();
        $total_perempuan = MahasiswaModel::where('jenis_kelamin', 'P')->count();
        $nama_mhs = JurusanModel::all();



        foreach ($nama_mhs as $get) {
            $arr = MahasiswaModel::where('id_jurusan', $get->id_jurusan)->count();

            $array [] = [
                'nama_jurusan' => $get->nama_jurusan,
                'jumlah_jurusan' => $arr
            ];
        }

         return view('home', compact(
            'total_mahasiswa',
            'total_jurusan',
            'total_admin',
            'total_laki',
            'total_perempuan',
            'nama_mhs',
            'array'));
     }

}
