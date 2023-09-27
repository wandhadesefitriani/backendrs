<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mcu;

class Mcu extends Model
{
    use HasFactory;
    protected $table ='mcus';
    protected $fillable =[ 
        'judul',
        'gambar',
        'deskripsi'
    ];
}
