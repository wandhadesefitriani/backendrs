<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikelkes extends Model
{
    use HasFactory;
    protected $table = 'artikelkes';
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'author',
    ];
}
