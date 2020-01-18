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
use DB;

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

        return view('recruteur.dashboard');
    }

    public function CompanyApplications(){
        $user = Auth::guard('employer')->user();
        $candidates = DB::table('candidates')
        ->join('candidate_offre','candidate_offre.candidate_id','=','candidates.id')
        ->join('offres','offres.id','=','candidate_offre.offre_id')
        ->join('employers','employers.id','=','offres.employer_id')
        ->select('candidates.*','offres.title as offre')
        ->where('employers.id','=',$user->id)
        ->paginate(1);

        return view('recruteur.companyApp', ['candidates'=>$candidates]);
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

        $this->validate($request, [
            'title' => 'required|min:6|max:20',
            'type' => 'min:6|max:20',
            'domaine' => 'min:6|max:20',
            'description' => 'min:6|max:20',
            'lieuTravailleExact' =>'min:6|max:20',
            'competence' =>'min:6|max:20',
            'remuniration' => 'min:6|max:20',
            'duree_stage' => 'min:6|max:20',
            'diplome' => 'min:6|max:20',
            'latitude' => 'min:6|max:20',
            'longitude' => 'min:6|max:20'
        ]);

        $offre = Offre::create([
            'domaine' => $request->domaine,
            'title' => $request->title,
            'type' => $request->type,
            'diplome' => $request->diplome,
            'anneesExperience' => $request->anneesExperience,
            'competence' => $request->competence,
            'duree_stage' => $request->duree_stage,
            'remuniration' => $request->remuniration,

            'description' => $request->description,

            'lieuTravailleExact' => $request->lieuTravailleExact,
            'country' => $request->country,
            'city' => $request->city,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'status' => true,
        ]);

        Auth::guard('employer')->user()->offre()->save($offre);
        return redirect()->back()->with('success', 'the job has been successfully posted');
    }

    public function updateJob(Request $request, $id)
    {
        /*
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        */

        Offre::find($id)->update([
            'title' => $request->title,
            'intitule' => $request->intitule,
            'type' => $request->type,
            'domaine' => $request->domaine,
            'description' => $request->description,
            'lieuTravaille' => $request->lieuTravaille,
            'competence' => $request->competence,
            'remuniration' => $request->remuniration,
            'status' => $request->status,
            'duree_stage' => $request->duree_stage,
            'diplome' => $request->diplome,
            'anneesExperience' => $request->anneesExperience
        ]);
        return redirect('/');
    }
}
