<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OperatorModel extends Model
{
    use HasFactory;
    protected $table = 'operator_sistem';
    protected $guarded = [];

    public static function getAllOperator()
    {
        $query = DB::table('operator_sistem');
        return $query;
    }
}
