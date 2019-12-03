<?php

namespace App\Http\Controllers;

use App\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("candidat.profile.dashboard",["id"=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $canditat= Condidat::find($id);
        // return view("candidat.profile.edit",["condidat"=>$candidat]);
        return view("candidat.profile.edit",["id"=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // $candidat= Condidat::find($id);
        // $condidat->civilite=$request->input("civilite");
        // $candidat->nom=$request->input("nom");
        // $candidat->prenom=$request->input("prenom");
        // $candidat->date_naissance=$request->input("data_naissance");
        // $candidat->email=$request->input("email");
        // $candidat->telephone=$request->input("telephone");
        // $candidat->adresse=$request->input("address");
        // $candidat->In=$request->input("In");
        var_dump($request->all());
    }

}
