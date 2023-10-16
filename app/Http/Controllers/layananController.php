<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layananunggulan;
use App\Models\layananlainnya;

class layananController extends Controller
{
    public function index(){
        $layanan=layananunggulan::all();
        $layananlainnya=layananlainnya::all();
        return view('frontend.layanan', compact('layanan','layananlainnya')); 
    } 
}