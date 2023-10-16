<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jadwalDokterFController extends Controller
{
    public function index(){
        return view('frontend.jadwaldokter');
    } 

}
