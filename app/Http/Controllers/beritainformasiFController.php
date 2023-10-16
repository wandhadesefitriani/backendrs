<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beritainformasiFController extends Controller
{
    public function index(){
        return view('frontend.beritainformasi');
    }
}
