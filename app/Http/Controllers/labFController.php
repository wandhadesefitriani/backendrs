<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\layananlaboratorium;

class labFController extends Controller
{
    public function index(){
        $LabF = layananlaboratorium::paginate(5);
        return view('frontend.lab', compact('LabF')); 
    } 
}

