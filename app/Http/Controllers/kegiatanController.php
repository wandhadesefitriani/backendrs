<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kegiatanController extends Controller
{
    public function index(){
        return view('frontend.kegiatan');
    }
}
