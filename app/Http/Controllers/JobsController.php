<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\offre;
use DB;
class JobsController extends Controller
{
    //just for the first time
    public function index(){
        $page=0;
        //for the first time there is no request
        if(request("page")){
            $page=request("page");
        }
        $offres=DB::table("offres")->join("employers","offres.employer_id","=","employers.id")
        ->select("offres.*","employers.name","employers.image")
        ->where("offres.status","=",1)
        ->offset($page*10-10)
        ->limit(10)
        ->get();
        //retunr just the requested page
        if(request("page")){
            return response()->json(["offres"=>$offres]);
        }
        return view("jobs.jobs",["offres"=>$offres,"all"=>count(offre::all())]);
    }
    public function pagination($page){
        dd($page);
        // $offres=DB::table("offres")->join("employers","offres.employer_id","=","employers.id")
        // ->select("offres.*","employers.name","employers.image")
        // ->offset($page*10)
        // ->limit(10)
        // ->get();
    }
    public function show($id_offre){
        $offre=DB::table("offres")->join("employers","offres.employer_id","=","employers.id")
        ->select("offres.*","employers.name","employers.image")
        ->where("offres.id","=",$id_offre)
        ->get();
        return view("jobs.job_single",["offre"=>$offre[0]]);
    }
    public function filter(Request $request,offre $offre){
        $offre=$offre->newQuery();
        $offre->where("status","=","1");
        if($request->has("domaine")){
            $offre->whereIn("offres.domaine",$request->domaine);
        }
        if($request->has("wilaya")){
            $offre->whereIn("offres.city",$request->wilaya);
        }
        $offre->join("employers","offres.employer_id","=","employers.id");
        
        if($request->has("societe")){
            $offre->whereIn("employers.societe",$request->societe);
        }
        $offre->select("offres.*","employers.name","employers.image");
        // ->whereIn("offres.domaine",$request->domaine)
        // ->whereIn("offres.city",$request->wilaya)
        // ->join("employers","offres.employer_id","=","employers.id")
        // ->select("offres.*","employers.name","employers.image")
        // ->whereIn("emplyers.societe",$request->societe)
        // ->offset(0)
        // ->limit(10)
        // ->get();
        return response()->json(["offres"=>$offre->get()]);
    }
}
