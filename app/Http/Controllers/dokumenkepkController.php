<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dokumenkepkController extends Controller
{
    public function index(){
        return view('frontend.dokumenkepk');
    }
}
