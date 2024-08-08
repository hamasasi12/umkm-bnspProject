<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    
    protected $table = "pesanans";
    protected $primary_key = "id";
    protected $fillable = [
        'nama_pemesan',
        'no_telp',
        'no_hp',
        'waktu',
        'pelayanan_paket',
        'jumlah_peserta',
        'pilihan_paket',
    ];
}
