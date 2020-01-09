<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;
class AppliedJobsController extends Controller
{
    public function index(){
        $candidate=Auth::guard("candidate")->user();
        return view("candidat.applied.applied_jobs",["candidate"=>$candidate]);
    }
    public function destroy($id_offre){
        $candidate=Auth::guard("candidate")->user();
        DB::table("candidate_offre")->where([["candidate_id","=",$candidate->id],["offre_id","=",$id_offre]])->delete();
        return response()->json(['etat'=>true]);
    }
}
