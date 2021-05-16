<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AGILEController extends Controller
{
    //
    public function dashboard(){

        return view('dashboard');
    }
    public function about(){

        return view('about');
    }
    public function method(){

        return view('method');
    }

    public function stages(){

        return view('stages');
    }

    public function principle(){

        return view('principle');
    }
    public function process(){

        return view('process');
    }
    
}
