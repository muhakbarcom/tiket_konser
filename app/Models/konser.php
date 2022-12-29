<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konser extends Model
{
    use HasFactory;

    protected $table = "konser";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama_konser', 'tanggal'];
}
