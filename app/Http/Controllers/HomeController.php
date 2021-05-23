<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\user;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user()->id;
        $profile = DB::table('users')
                    ->select('users.*')
                    ->where(['users.id' => $user])
                    ->first();
        return view('home',['profile' => $profile]);
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
