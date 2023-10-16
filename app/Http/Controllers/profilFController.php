<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilFController extends Controller
{
    public function index(){
        return view('frontend.profil');
    } 
}
