<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Cv;

class CvController extends Controller
{
    public function show($id){
        $cv = new Cv();
    }
    public function create(){
        return view("candidat.cv.create");
    }
}
