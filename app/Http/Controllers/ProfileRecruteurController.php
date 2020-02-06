<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Employer;
use App\http\Controllers\imageController as Image;
use Illuminate\Support\Facades\Hash;

class ProfileRecruteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::guard('employer')->user();
        return view('recruteur.edit_profile',['user' => $user,'employer'=>$user]);
    }

    public function companyPage()
    {
        $user = Auth::guard('employer')->user();
        return view('recruteur.companypage',['user' => $user,'employer'=>$user]);
    }

    public function indexOffres()
    {
        $user = Auth::guard('employer')->user();
        $offres = $user->offre()->paginate(2);
        return view('recruteur.manage_jobs',['offres' => $offres,'user'=>$user,'employer'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            'email'   => 'required|email'
        ]);

        $id = Auth::guard('employer')->user()->id;
        $user = Employer::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if(Hash::make($request->current_password) == $user->password)        $user->password = $request->new_password;
        $user->type = $request->type;
        $user->telephone = $request->telephone;
        $user->google = $request->google;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->linkedin = $request->linkedin;
        $user->contact_email = $request->contact_email;
        $user->country = $request->country;
        $user->website = $request->website;
        $user->company_size = $request->company_size;
        $user->city = $request->city;
        image::uploadImage($id, "employer", $request);
        $user->save();

        return redirect()->route('edit_profile_recruteur.index');
    }

    public function updateInfos(Request $request)
    {

        $this->validate($request, [
            'about_us'   => 'max:1000',
            'extra_info'   => 'max:1000'
        ]);

        $user = Auth::guard('employer')->user();
        $user->about_us = $request->about_us;
        $user->extra_info = $request->extra_info;
        $user->save();

        return redirect()->route('companyPage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
