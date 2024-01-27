<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeModel extends Model
{
    use HasFactory;
    protected $table = "data_mahasiswa";
    protected $guarded = [];

    public static function getAllDasboard()
    {
        $query = DB::table('data_mahasiswa')
            ->join('data_jurusan', 'data_mahasiswa.id_jurusan', '=', 'data_jurusan.id_jurusan');
        return $query;
    }
}
