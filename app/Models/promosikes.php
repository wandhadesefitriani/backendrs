<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promosikes extends Model
{
    use HasFactory;
    protected $table = 'promosikes';
    protected $fillable = [
        'gambar',
    ];
}
