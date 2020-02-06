<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\offre;
use App\Employer;
use App\candidate_offre;
use DB;
class JobsController extends Controller
{
    //just for the first time
    public function index(){
        $applied_jobs=array();
        $offres=DB::table("offres")->join("employers","offres.employer_id","=","employers.id")
        ->where("offres.status","=",1)
        ->select("offres.*","employers.name","employers.image");
        if(Auth::guard("candidate")->check()){
            $id=Auth::guard("candidate")->id();
            $applied_jobs=candidate_offre::where("candidate_id","=",$id)->select("offre_id")->get();
            if(count($applied_jobs)){
                $offres=$offres->whereNotIn("offres.id",$applied_jobs);
            }
        }
        $all=count($offres->get());
        $offres=$offres->offset(0)->limit(10)->get();
        if(Auth::guard("candidate")->check()){
            return view("jobs.jobs",["candidate"=>Auth::guard("candidate")->user(),"offres"=>$offres,"all"=>$all]);
        }
        $employer = Auth::guard('employer')->user();
        return view("jobs.jobs",["offres"=>$offres,"all"=>$all,'employer'=>$employer]);
    }
    //jobs single
    public function show($id_offre){
        $offre=DB::table("offres")->join("employers","offres.employer_id","=","employers.id")
        ->select("offres.*","employers.name","employers.image")
        ->where("offres.id","=",$id_offre)
        ->get();
        if($offre->isempty())
        return redirect()->back();
        $employer = Auth::guard('employer')->user();
        if(Auth::guard("candidate")->check()){
            return view("jobs.job_single",["candidate"=>Auth::guard("candidate")->user(),"offre"=>$offre[0],'employer'=>$employer]);
        }
        return view("jobs.job_single",["offre"=>$offre[0],'employer'=>$employer]);
    }
    //filtring
    public function filter(Request $request,offre $offre){
        //numero de page
        $page=$request->page;
        $offre=$offre->newQuery();
        $offre->where("status","=","1");
        if($request->has("domaine")){
            $offre->whereIn("offres.domaine",$request->domaine);
        }
        if($request->has("wilaya")){
            $offre->whereIn("offres.city",$request->wilaya);
        }
        $offre->join("employers","offres.employer_id","=","employers.id");
        if($request->has("type")){
            $offre->whereIn("employers.type",$request->type);
        }
        //whene the user choose from the search home
        if($request->has("name")){
            $offre->where("employers.name","=",$request->name);
        }
        if(Auth::guard("candidate")->check()){
            $id=Auth::guard("candidate")->id();
            $applied_jobs=candidate_offre::where("candidate_id","=",$id)->select("offre_id")->get();
            if(count($applied_jobs)){
               $offre->whereNotIn("offres.id",$applied_jobs);
            }
        }
        $offre->select("offres.*","employers.name","employers.image");
        //number of lines return from filtring
        $all=count($offre->get());
        $offre->offset($page*10-10)->limit(10);
        return response()->json(["offres"=>$offre->get(),"all"=>$all]);
        // return view("jobs.jobs",["offres"=>$offre]);

    }
    //home search
    public function search(Request $request){
        $query=$request->search;
        if($query!=""){
            $domaines=offre::where("domaine","like","%".$query."%")
            ->select("domaine")->groupBy("domaine")->get();
            $titles=offre::where("title","like","%".$query."%")
            ->select("title")->groupBy("title")->get();
            $cities=offre::where("city","like","%".$query."%")
            ->select("city")->groupBy("city")->get();
            $employers=Employer::where("name","like","%".$query."%")
            ->select("name")->groupBy("name")->get();
            return response()->json(['domaines'=>$domaines,"titles"=>$titles,"cities"=>$cities,"employers"=>$employers]);
        }
    }
    public function searchJobs(Request $request){
        $offres=offre::where("status","=","1");

        if($request->has("domaine")){
            $offres->where("offres.domaine","=",$request->domaine);

        }
        if($request->has("wilaya")){
            $offres->where("offres.city","=",$request->wilaya);
        }
        if($request->has("title")){
            $offres->where("offres.title","=",$request->title);
        }
        $offres->join("employers","offres.employer_id","=","employers.id");
        if($request->has("name")){
            $offres->where("employers.name","=",$request->name);
        }
        if(Auth::guard("candidate")->check()){
            $id=Auth::guard("candidate")->id();
            $applied_jobs=candidate_offre::where("candidate_id","=",$id)->select("offre_id")->get();
            if(count($applied_jobs)){
               $offres->whereNotIn("offres.id",$applied_jobs);
            }
        }
        $offres->select("offres.*","employers.name","employers.image");
        $all=count($offres->get());
        $offres->offset(0)->limit(10);
        if(Auth::guard("candidate")->check()){
            return view("jobs.jobs",["candidate"=>Auth::guard("candidate")->user(),"offres"=>$offres->get(),"all"=>$all]);
        }
        $employer = Auth::guard('employer')->user();
        return view("jobs.jobs",["offres"=>$offres->get(),"all"=>$all,'employer'=>$employer]);
    }
}
