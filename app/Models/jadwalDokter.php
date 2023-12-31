<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    use HasFactory;
    protected $table = 'jadwal_dokters';
    protected $fillable = [
        'nama',
        'jam',
        'hari',
        'gambar',
    ];
}
