<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promosikes;

class Promosikes extends Model
{
    use HasFactory;
    protected $table ='promosikess';
    protected $fillable =[ 
        'gambar',
    ];
}