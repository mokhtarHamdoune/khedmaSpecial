<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class CvController extends Controller
{
    public function index(){
        $candidate=Auth::guard("candidate")->user();
        return view ("candidat.cv.index",["candidate"=>$candidate]);
    }
    public function store(Request $request){
        $candidate=Auth::guard("candidate")->user();
        $cv = new Cv();
        $cv->titre=$request['titre_cv'];
        $cv->idCandidate=$candidate->id;
        if($request->hasFile("cv_img")){
            $cv->image=$request->cv_img->store("cv_images");
        }
        $cv->save();
        return redirect()->route("resume");
    }
    public function show($id){
        $candidate=Auth::guard("candidate")->user();
        return view("candidat.cv.cv",["candidate"=>$candidate,"cv"=>Cv::find($id)]);
    }
    // public function create(){
    //     return view("candidat.cv");
    // }
    public function destroy($id){
        $cv=Cv::findOrFail($id);
        $cv->delete();
        return redirect()->route("resume");
    }
}
