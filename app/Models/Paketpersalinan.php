<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paketpersalinan;

class PaketPersalinan extends Model
{
    use HasFactory;
    protected $table ='paket_persalinans';
    protected $fillable =[ 
        'judul',
        'gambar',
        'deskripsi'
    ];
}

