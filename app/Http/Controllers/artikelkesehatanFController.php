<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelkesehatanFController extends Controller
{
    public function index(){
        return view('frontend.artikelkesehatan');
    } 
}
