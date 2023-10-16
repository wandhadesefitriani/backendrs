<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eswl;

class eswlFController extends Controller
{
    public function index(){
        $eswl = Eswl::paginate(5);
        return view('frontend.eswl', compact('eswl')); 
    } 
}
