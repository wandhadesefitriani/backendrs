<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rawatinap extends Model
{
    use HasFactory;
    protected $table = 'rawatinap';
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi'
    ];
}
