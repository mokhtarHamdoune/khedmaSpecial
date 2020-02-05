<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class CandidatController extends Controller
{
    public function candidateSingle($id){
        $candidate = Candidate::find($id);
        return view('candidate_single', ['candidate' => $candidate]);
    }

    public function sendMess(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'Email' => 'required',
            'message' => 'required',
        ]);
        $message = new Messages;
        $message->name = $request->name;
        $message->Email = $request->Email;
        $message->body = $request->message;
        $message->employer_id = $id;
        $message->save();

        return redirect()->back();
    }

    public function try()
    {
        if(!Auth::guard('candidate')->check()){
            return response()->json(["isAuth"=>false]);
        }else{
            $cvs=Auth::guard('candidate')->user()->cv()->select("id","titre")->get();
            return response()->json(["isAuth"=>true,"cvs"=>$cvs]);
        }
    }

    public function postuler(Request $request){
        $user = Auth::guard('candidate')->user();
        $user->offre()->syncWithoutDetaching([$request->id => ['cv_id' => $request->cv_id]]);
        return response()->json(["etat"=>true]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $candidate=Auth::guard("candidate")->user();
        return view("candidat.dashboard",['candidate'=>$candidate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $candidate=Auth::guard("candidate")->user();
        return view("candidat.edit_profile",['candidate'=>$candidate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $candidate=Auth::guard("candidate")->user();
        $request->validate([
            "email"=>"required"
        ]);
        $candidate->civilite=$request["civilite"];
        $candidate->nom=$request["nom"];
        $candidate->prenom=$request["prenom"];
        $candidate->date_naissance=$request["data_naissance"];
        $candidate->email=$request["email"];
        $candidate->adresse=$request["address"];
        $candidate->Tel=$request["telephone"];
        $candidate->in=$request["In"];
        if($request->hasFile("profile_image")){
            if($candidate->photo!==null)Storage::disk('public')->delete($candidate->photo);
            $candidate->photo=$request->profile_image->store("candidate_profile_img");
        }
        $candidate->save();
        return redirect()->route("dashboard");

    }

}
