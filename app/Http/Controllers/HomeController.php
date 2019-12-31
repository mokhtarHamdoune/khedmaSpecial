<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //je sais pas esq nzid les middleware wala namhim compli

    // public function __construct()
    // {
    //     $this->middleware(['middleware' => 'candidate']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        if(Auth::guard("candidate")->check()){
            return view('welcome',["candidate"=>Auth::guard("candidate")->user()]);
        }else if(Auth::guard("employer")->check()){
            return view('welcome',["employer"=>Auth::guard("employer")->user()]);
        }else {
            return view('welcome');
        }
    }
}
