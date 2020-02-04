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
use App\Charts\SampleChart;
use DB;

class RecruteurController extends Controller
{

    //all the companies
    public function index(){
        $employers = Employer::all();
        return view("companies.companies",["employers"=>$employers]);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['string', 'max:255'],
            'password' => ['string', 'min:8'],
        ]);
    }

    public function companySingle($id){
        $candidate = Auth::guard('candidate')->user();
        $rec = Employer::find($id);
        if($rec){
        $offres = $rec->offre()->orderBy('created_at','desc')->limit(6)->get();
        return view('companies.company_single', ['rec' => $rec, 'offres' => $offres, 'candidate' => $candidate]);}
        return redirect()->route('home');
    }

    public function companySingleJ(){
        return view('company_single');
    }

    public function dashboardApplications(){
        $emp = null;
        $chart = null;
        $user = Auth::guard('employer')->user();
        $offres = Employer::find(2)->offre()->select('city' ,DB::raw('count(*) as total'))
        ->groupBy('city')
        ->get();
        if($offres->isempty())
            $emp = "No offres to show stats for";
        else{
        $cities = $offres->map(function ($item) {
            return $item->city;
        });

        $values = $offres->map(function ($item) {
            return $item->total;
        });

        $chart = new SampleChart;
        $chart->labels($cities);
        $chart->dataset('My dataset', 'pie', $values)->backgroundColor(['red','blue']);
        $chart->options([
        'scales' => [
            'xAxes' => [
                'display' => false],
            'yAxes' => [
                'display' => false],
            ],]);
        }
        return view('recruteur.dashboard',['user' => $user, 'chart' => $chart, 'emp' => $emp]);
    }

    public function messages(){
        $user = Auth::guard('employer')->user();
        $messages = DB::table('messages')->select('*')->where('employer_id','=',$user->id)->orderby('status','asc')->paginate(10);
        return view('recruteur.messages',['user' => $user, 'messages' => $messages]);
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
/*
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
        return view('test', ['offres' => $final]);*/

  /*      $candidate = Auth::guard('candidate')->user();
        $candidate->offre()->syncWithoutDetaching([5 => ['created_at' => '2019-12-26 23:49:47']]);
*/
        if(Offre::find(12)) return view('test');
        else return redirect('/welcome');
    }

    public function postNewJob(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|min:6|max:30',
            'type' => 'min:3|max:20',
            'domaine' => 'min:6|max:30',
            'description' => 'min:6|max:300',
            'lieuTravailleExact' =>'min:4|max:20',
            'competence' =>'min:6|max:20',
            'remuniration' => 'min:3|max:20',
            'duree_stage' => 'min:2|max:20',
            'diplome' => 'min:6|max:20' 
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
