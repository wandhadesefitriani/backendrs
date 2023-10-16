<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paketpersalinan;

class paketController extends Controller
{
    public function index(){
        $paketpersalinan = Paketpersalinan::all();
        return view('frontend.paket', compact('paketpersalinan')); 
    } 
}

