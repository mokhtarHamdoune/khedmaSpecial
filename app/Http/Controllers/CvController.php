<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Formation;
use App\Experience;
use App\Competence;
use App\Document;
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
    public function destroy($id){
        $cv=Cv::findOrFail($id);
        Storage::disk('public')->delete($cv->image);
        $cv->delete();
        return redirect()->route("resume");
    }
    //start formation
    public function addFormation(Request $request){
        $formation = new Formation();
        $formation->domaine=$request["dom_form"];
        $formation->diplome=$request["dip_form"];
        $formation->lieu=$request["lieu_form"];
        $formation->date_debut=$request["debut_form"];
        $formation->date_fin=$request["fin_form"];
        $formation->idCV=$request["cv_id"];
        $formation->save();
        return response()->json(["etat"=>true,"id_form"=>$formation->id]);
    }
    public function editFormation(Request $request,$id_form){
        $formation=Formation::find($id_form);
        $formation->domaine=$request["dom_form"];
        $formation->diplome=$request["dip_form"];
        $formation->lieu=$request["lieu_form"];
        $formation->date_debut=$request["debut_form"];
        $formation->date_fin=$request["fin_form"];
        $formation->save();
        return response()->json(["etat"=>true]);
    }
    public function deleteFormation($id_form){
        $formation=Formation::find($id_form);
        $formation->delete();
        return response()->json(["etat"=>true]);
    }
    //end formation
    //start experience 
    public function addExperience(Request $request){
       $experience=new Experience();
       $experience->intitule=$request["intetule"];
       $experience->lieu=$request["lieu_exp"];
       $experience->date_debut=$request["debut_exp"];
       $experience->date_fin=$request["fin_exp"];
       $experience->description=$request["desc_exp"];
       $experience->idCV=$request["cv_id"];
       $experience->save();
       return response()->json([
        'etat' => true,
        'id_exp' => $experience->id
        ]);
    
    }
    public function updateExperience(Request $request,$id_exp){
        $experience=Experience::find($id_exp);
        $experience->intitule=$request["intetule"];
        $experience->lieu=$request["lieu_exp"];
        $experience->date_debut=$request["debut_exp"];
        $experience->date_fin=$request["fin_exp"];
        $experience->description=$request["desc_exp"];
        $experience->save();
        return response()->json([
        'etat' => true,
        ]);
    }
    public function deleteExperience($id){  
        $experience=Experience::find($id);
        $experience->delete();
        return response()->json(["etat"=>true]);
    }
    //end experience
    //start competence
    public function addCompetence(Request $request){
        $competence=new Competence();
        $competence->annees_exp=$request["cmp_years"];
        $competence->description=$request["description_cmp"];
        $competence->idCV=$request["cv_id"];
        $competence->save();
        return response()->json(["etat"=>true,"id_cmp"=>$competence->id]);
    }
    public function editCompetence(Request $request,$id_cmp){
        $competence= Competence::find($id_cmp);
        $competence->annees_exp=$request["cmp_years"];
        $competence->description=$request["description_cmp"];
        $competence->save();
        return response()->json(["etat"=>true]);
    }
    public function deleteCompetence($id_cmp){
        $competence= Competence::find($id_cmp);
        $competence->delete();
        return response()->json(["etat"=>true]);
    }
    //end competence
    //basics 
    public function editBasics(Request $request,$id_cv){
        $cv=Cv::find($id_cv);
        $cv->titre=$request["titre_cv"];
        //stick the arry of languages
        $languages=implode(",",$request["langue"]);
        //and add it to the resume
        $cv->langues=$languages;
        $cv->save();
        return response()->json(["etat"=>true]);
    }
    //end basics
    //start documents
    public function addDocument(Request $request){
        $document = new Document();
        $document->type=$request["type_doc"];
        $document->idCV=$request["id_cv"];
        if($request->hasfile("document")){
            $document->nom=$request->file('document')->getClientOriginalName();
            $document->fichier=$request->document->store("cv_files");
        }
        $document->save();
        return response()->json(["etat"=>true,"doc_id"=>$document->id,"path"=>asset("storage/".$document->fichier)]);
    }
    public function dropDocument($id_doc){
        $document=Document::find($id_doc);
        Storage::disk('public')->delete($document->fichier);
        $document->delete();
        return response()->json(['etat'=>true]);
    }
    //end documents
}
