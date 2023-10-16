<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mcu;

class mcuFController extends Controller
{
    public function index(){
        $mcu = Mcu::all();
        return view('frontend.mcu', compact('mcu')); 
    } 
}
