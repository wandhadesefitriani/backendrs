<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Eswl;

class Eswl extends Model
{
    use HasFactory;
    protected $table ='eswls';
    protected $fillable =[ 
        'judul',
        'gambar',
        'deskripsi'
    ];
}

