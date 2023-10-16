<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layananunggulan extends Model
{
    protected $table = 'layananunggulan';
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi'
    ];
}
