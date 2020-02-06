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
        $candidate = Auth::guard("candidate")->user();
        $employer = Auth::guard("employer")->user();
        return view("companies.companies",["employers"=>$employers, "candidate" => $candidate, "employer"=>$employer]);
    }

    public function postNew(){
        $user = Auth::guard('employer')->user();
        $candidate = Auth::guard("candidate")->user();
        $employer = Auth::guard("employer")->user();
        return view("recruteur.post_job",["candidate" => $candidate, "employer"=>$employer, 'user'=>$user]);
    }

    public function editJob($id){
        $user = Auth::guard('employer')->user();
        $candidate = Auth::guard("candidate")->user();
        $employer = Auth::guard("employer")->user();
        $offre = $user->offre()->where('offres.id','=',$id)->get();
        if($offre->isempty())
        return redirect()->route("jobs.show",$id);

        return view("recruteur.edit_job",["candidate" => $candidate, "employer"=>$employer, 'user'=>$user, 'offre'=>$offre]);

    }

    public function deleteJob($id){
        $user = Auth::guard('employer')->user();
        $candidate = Auth::guard("candidate")->user();
        $employer = Auth::guard("employer")->user();
        $offre = $user->offre()->where('offres.id','=',$id)->get();
        if($offre->isempty())
        return redirect()->back();

        Offre::find($id)->delete();
        return redirect()->back();

    }

    public function status($id){
        $user = Auth::guard('employer')->user();
        $candidate = Auth::guard("candidate")->user();
        $employer = Auth::guard("employer")->user();
        $offre = $user->offre()->where('offres.id','=',$id)->get();
        if($offre->isempty())
        return redirect()->back();

        $offre = Offre::find($id);
        if($offre->status) $offre->status = false;
        else $offre->status = true;
        $offre->save();
        return redirect()->back();

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
        $employer = Auth::guard("employer")->user();
        $rec = Employer::find($id);
        if($rec){
        $offres = $rec->offre()->orderBy('created_at','desc')->limit(6)->get();
        return view('companies.company_single', ['rec' => $rec, 'offres' => $offres, 'candidate' => $candidate, "employer"=>$employer]);}
        return redirect()->route('home');
    }

    public function companySingleJ(){
        return view('company_single');
    }

    public function dashboardApplications(){

        $emp = null;
        $chart = null;
        $user = Auth::guard('employer')->user();
        $employer = Auth::guard('employer')->user();

        $number = DB::table('candidates')
        ->join('candidate_offre','candidate_offre.candidate_id','=','candidates.id')
        ->join('offres','offres.id','=','candidate_offre.offre_id')
        ->join('employers','employers.id','=','offres.employer_id')
        ->select('candidates.*','offres.title as offre')
        ->where('employers.id','=',$user->id)
        ->count();

        $offres = $user->offre()->select('city' ,DB::raw('count(*) as total'))
        ->groupBy('city')
        ->get();
        if($offres->isempty())
            $emp = "No offres to show stats for";
        else
        {
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

        //Pie Chart Start
        $piesql = Offre::select('city' ,DB::raw('count(*) as total'))->where('employer_id','=',$user->id)
        ->groupBy('city')
        ->get();

        $cities = $piesql->map(function ($item) {
            return $item->city;
        });

        $values = $piesql->map(function ($item) {
            return $item->total;
        });

        $chart = new SampleChart;
        $chart->labels($cities);
        $chart->dataset('My dataset', 'pie', $values)->backgroundColor(['red','blue','green','yellow','purple','orange','black','white','grey']);
        $chart->options([
        'scales' => [
            'xAxes' => [
                'display' => false],
            'yAxes' => [
                'display' => false],
        ],]);
        //Pie Chart End

        //Bar Chart Start
        $year = 2020;
        $barsql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->whereYear('created_at',$year)->where('employer_id','=',$user->id)
        ->groupBy('month')
        ->get();
        $barvalues = $barsql->map(function ($item) {
            return $item->total;
        });
        $bar = new SampleChart;
        $bar->labels(['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','October','Novembre','Decembre']);
        $bar->dataset('Bars', 'bar', $barvalues)->backgroundColor('purple');
        //Bar Chart End

        //Line Chart Start
        $linesql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->where('type','=','stage')->where('employer_id','=',$user->id)
        ->groupBy('month')
        ->get();
        $stagevalues = $linesql->map(function ($item) {
            return $item->total;
        });

        $linesql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->where('type','=','cdi')->where('employer_id','=',$user->id)
        ->groupBy('month')
        ->get();
        $cdivalues = $linesql->map(function ($item) {
            return $item->total;
        });

        $linesql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->where('type','=','cdd')->where('employer_id','=',$user->id)
        ->groupBy('month')
        ->get();
        $cddvalues = $linesql->map(function ($item) {
            return $item->total;
        });

        $line = new SampleChart;
        $line->labels(['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','October','Novembre','Decembre']);
        $line->dataset('stage', 'line', $stagevalues)->backgroundColor('transparent')->color('green');
        $line->dataset('cdi', 'line', $cdivalues)->backgroundColor('transparent')->color('red');
        $line->dataset('cdd', 'line', $cddvalues)->backgroundColor('transparent')->color('blue');
        //Line Chart End

        //Bar Candidat Start
        $sql = DB::table('candidates')
        ->join('candidate_offre','candidate_offre.candidate_id','=','candidates.id')
        ->join('offres','offres.id','=','candidate_offre.offre_id')
        ->join('employers','employers.id','=','offres.employer_id')
        ->select(DB::raw('count(*) as total'), DB::raw('MONTH(candidate_offre.created_at) month'))
        ->where('employers.id','=',$user->id)
        ->groupBy('month')
        ->get();
        $barvaluesPostule = $sql->map(function ($item) {
            return $item->total;
        });

        $sql = DB::table('candidates')
        ->join('candidate_employer','candidate_employer.candidate_id','=','candidates.id')
        ->select(DB::raw('count(*) as total'), DB::raw('MONTH(candidate_employer.created_at) month'))
        ->where('candidate_employer.employer_id','=',$user->id)
        ->groupBy('month')
        ->get();
        $barvaluesSpontan = $sql->map(function ($item) {
            return $item->total;
        });
        $barcandidat = new SampleChart;
        $barcandidat->labels(['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','October','Novembre','Decembre']);
        $barcandidat->dataset('Bars', 'bar', $barvaluesPostule)->backgroundColor('red');
        $barcandidat->dataset('Bars', 'bar', $barvaluesSpontan)->backgroundColor('blue');;
        //Bar Chart End

        return view('recruteur.dashboard',['user' => $user,'employer'=>$employer, 'chart' => $chart,'bar' => $bar, 'line' => $line, 'barcandidat' => $barcandidat, 'emp' => $emp,'number'=>$number,'year'=>$year]);
    }

    public function dashboardyear(Request $request){

        $emp = null;
        $chart = null;
        $user = Auth::guard('employer')->user();
        $employer = Auth::guard('employer')->user();

        $number = DB::table('candidates')
        ->join('candidate_offre','candidate_offre.candidate_id','=','candidates.id')
        ->join('offres','offres.id','=','candidate_offre.offre_id')
        ->join('employers','employers.id','=','offres.employer_id')
        ->select('candidates.*','offres.title as offre')
        ->where('employers.id','=',$user->id)
        ->count();

        $offres = $user->offre()->select('city' ,DB::raw('count(*) as total'))
        ->groupBy('city')
        ->get();
        if($offres->isempty())
            $emp = "No offres to show stats for";
        else
        {
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

        //Pie Chart Start
        $piesql = Offre::select('city' ,DB::raw('count(*) as total'))->where('employer_id','=',$user->id)
        ->groupBy('city')
        ->get();

        $cities = $piesql->map(function ($item) {
            return $item->city;
        });

        $values = $piesql->map(function ($item) {
            return $item->total;
        });

        $chart = new SampleChart;
        $chart->labels($cities);
        $chart->dataset('My dataset', 'pie', $values)->backgroundColor(['red','blue','green','yellow','purple','orange','black','white','grey']);
        $chart->options([
        'scales' => [
            'xAxes' => [
                'display' => false],
            'yAxes' => [
                'display' => false],
        ],]);
        //Pie Chart End

        //Bar Chart Start
        $year = $request->year;
        $barsql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->whereYear('created_at',$year)->where('employer_id','=',$user->id)
        ->groupBy('month')
        ->get();
        $barvalues = $barsql->map(function ($item) {
            return $item->total;
        });
        $bar = new SampleChart;
        $bar->labels(['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','October','Novembre','Decembre']);
        $bar->dataset('Bars', 'bar', $barvalues)->backgroundColor('purple');
        //Bar Chart End

        //Line Chart Start
        $linesql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->where('type','=','stage')->where('employer_id','=',$user->id)
        ->groupBy('month')
        ->get();
        $stagevalues = $linesql->map(function ($item) {
            return $item->total;
        });

        $linesql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->where('type','=','cdi')->where('employer_id','=',$user->id)
        ->groupBy('month')
        ->get();
        $cdivalues = $linesql->map(function ($item) {
            return $item->total;
        });

        $linesql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->where('type','=','cdd')->where('employer_id','=',$user->id)
        ->groupBy('month')
        ->get();
        $cddvalues = $linesql->map(function ($item) {
            return $item->total;
        });

        $line = new SampleChart;
        $line->labels(['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','October','Novembre','Decembre']);
        $line->dataset('stage', 'line', $stagevalues)->backgroundColor('transparent')->color('green');
        $line->dataset('cdi', 'line', $cdivalues)->backgroundColor('transparent')->color('red');
        $line->dataset('cdd', 'line', $cddvalues)->backgroundColor('transparent')->color('blue');
        //Line Chart End

        //Bar Candidat Start
        $sql = DB::table('candidates')
        ->join('candidate_offre','candidate_offre.candidate_id','=','candidates.id')
        ->join('offres','offres.id','=','candidate_offre.offre_id')
        ->join('employers','employers.id','=','offres.employer_id')
        ->select(DB::raw('count(*) as total'), DB::raw('MONTH(candidate_offre.created_at) month'))
        ->where('employers.id','=',$user->id)
        ->groupBy('month')
        ->get();
        $barvaluesPostule = $sql->map(function ($item) {
            return $item->total;
        });

        $sql = DB::table('candidates')
        ->join('candidate_employer','candidate_employer.candidate_id','=','candidates.id')
        ->select(DB::raw('count(*) as total'), DB::raw('MONTH(candidate_employer.created_at) month'))
        ->where('candidate_employer.employer_id','=',$user->id)
        ->groupBy('month')
        ->get();
        $barvaluesSpontan = $sql->map(function ($item) {
            return $item->total;
        });
        $barcandidat = new SampleChart;
        $barcandidat->labels(['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','October','Novembre','Decembre']);
        $barcandidat->dataset('Bars', 'bar', $barvaluesPostule)->backgroundColor('red');
        $barcandidat->dataset('Bars', 'bar', $barvaluesSpontan)->backgroundColor('blue');;
        //Bar Chart End

        return view('recruteur.dashboard',['user' => $user,'employer'=>$employer, 'chart' => $chart,'bar' => $bar, 'line' => $line, 'barcandidat' => $barcandidat, 'emp' => $emp,'number'=>$number,'year'=>$year]);
    }

    public function messages(){
        $user = Auth::guard('employer')->user();
        $messages = DB::table('messages')->select('*')->where('employer_id','=',$user->id)->orderby('status','asc')->paginate(10);
        return view('recruteur.messages',['user' => $user, 'messages' => $messages,'employer'=>$user]);
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

        return view('recruteur.companyApp', ['candidates'=>$candidates, 'user'=>$user,'employer'=>$user]);
    }

    public function CompanySpontane(){
        $user = Auth::guard('employer')->user();
        $candidates = $user->candidate()->paginate(6);
        return view('recruteur.companySpontane', ['candidates'=>$candidates, 'user'=>$user, 'employer'=>$user]);
    }

    public function editProfile(Request $request){

        $this->validator($request->all())->validate();
        if(Auth::guard('employer')->check()){
        $id = Auth::guard('employer')->user()->id;
        $user = Employer::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
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
            'status' => true,
        ]);
        Auth::guard('employer')->user()->offre()->save($offre);
        return redirect()->back()->with('success', 'the job has been successfully posted');
    }

    public function editJobUpdate(Request $request,$offre_id)
    {

        $offre = Offre::find($offre_id)->update([
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
        return redirect()->back()->with('success', 'the job has been successfully updated');
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
