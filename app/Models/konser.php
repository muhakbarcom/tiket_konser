<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class konser extends Model
{
    use HasFactory;

    protected $table = "konser";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama_konser', 'tanggal'];


    function get_by_id($id_konser)
    {
        return DB::table('konser')->where('id', $id_konser)->get()->first();
    }
}
