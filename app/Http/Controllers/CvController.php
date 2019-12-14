<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Cv;
use Illuminate\Support\Facades\Auth;
class CvController extends Controller
{
    public function show(){
        $candidate=Auth::guard("candidate")->user();
        return view("candidat.cv",["candidate"=>$candidate]);
    }
    public function create(){
        return view("candidat.cv");
    }
}
