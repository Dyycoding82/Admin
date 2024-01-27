<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JurusanModel extends Model
{
    use HasFactory;
    protected $table = "data_jurusan";
    protected $guarded = [];

    public static function getAllJurusan()
    {
        $query = DB::table('data_jurusan');
        return $query;
    }
}
