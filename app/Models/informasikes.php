<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasikes extends Model
{
    use HasFactory;
    protected $table = 'informasikes';
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'author',
    ];
}
