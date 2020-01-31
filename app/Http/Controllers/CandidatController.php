<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class CandidatController extends Controller
{


    public function postule(Request $request)
    {
        $user = Auth::guard('candidate')->user();
        $user->offres()->saveWithoutDetaching([$request->offre_id]);
        return redirect()->back();
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
