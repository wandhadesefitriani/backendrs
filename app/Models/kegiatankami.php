<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatankami extends Model
{
    use HasFactory;
    protected $table = 'kegiatankamis';
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'author',
    ];
}