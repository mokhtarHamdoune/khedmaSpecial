<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Employer;
use App\Candidate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\http\Controllers\imageController as Image;

class RecruteurController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['string', 'max:255'],
            'password' => ['string', 'min:8'],
        ]);
    }

    public function dashboardApplications(){
        $user= Auth::guard('employer')->user();
        $offres = $user->offre;
        $candidates = array();
        foreach($offres as $offre){
            array_push($candidates, $offre->candidate);
        }
        return view('recruteur.dashboard', ['candidates'=>$candidates]);
    }

    public function editProfile(Request $request){

        $this->validator($request->all())->validate();
        if(Auth::guard('employer')->check()){
        $id = Auth::guard('employer')->user()->id;
        $user = Employer::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->civilite = $request->civilite;
        $user->telephone = $request->telephone;
        $user->fonction = $request->fonction;
        $user->google = $request->google;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->linkedin = $request->linkedin;
        $user->contact_email = $request->contact_email;
        image::uploadImage($id, "employer", $request);
        $user->save();
        }
        return redirect()->back();
    }

    public function test(Request $request){

        $user = Employer::find(1);
        $offres = $user->offre;
        $candidates = array();
        $final = array();
        foreach($offres as $offre){
            array_push($candidates, $offre->candidate[0]);
        }
        foreach($candidates as $candidate){
            unset($candidate->pivot);
        }
        $i = $j = 0;
        foreach($candidates as $candidate){
            if(! in_array($candidate , $final)){
                $final[$i][0] = $candidate->id;
                $final[$i][1] = $candidate->name;
                $i++;
            }
        }
        array_unique($final, SORT_REGULAR);
        return view('test', ['offres' => $final]);
    }

    public function postNewJob(Request $request)
    {
        Offre::create([
            //fill all that's not null
        ]);
        return redirect('/');
    }
}
