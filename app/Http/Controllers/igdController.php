<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class igdController extends Controller
{
    public function index(){
        return view('frontend.igd');
    }
}
