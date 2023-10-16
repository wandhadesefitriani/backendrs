<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rawatinap;

class ranapController extends Controller
{
    public function index(){
        $rawat = rawatinap::all();
        return view('frontend.rawatInap', compact('rawat'));
    } 
}
