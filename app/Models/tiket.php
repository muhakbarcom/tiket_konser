<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    use HasFactory;

    protected $table = "tiket";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama_lengkap', 'konser_id', 'alamat', 'nomor_hp', 'is_check_in', 'tiket_id', 'tanggal'];
}
