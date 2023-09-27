<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class layananlaboratorium extends Model
{
    use HasFactory;
    protected $table = 'layananlaboratorium';
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi'
    ];
}
