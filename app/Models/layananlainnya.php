<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layananlainnya extends Model
{
    protected $table = 'layananlainnya';
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi'
    ];
}