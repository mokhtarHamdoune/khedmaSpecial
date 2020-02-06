<?php

namespace App\Http\Controllers;

use DB;
use App\Test;
use App\Employer;
use App\Offre;
use App\Candidate;
use Illuminate\Http\Request;
use App\Charts\SampleChart;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Offre::find(1)->update(['status' => 1]);
        $rec = Employer::find(1);
        $offres = $rec->offre()->orderBy('created_at','desc')->take(6)->get();
        return view('test', ['candidates' => $offres]);
    }

    public function show()
    {
        /*$chart = new sample;
        $chart->labels(['one','two','three']);
        $yesterday_users = Offre::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = Offre::whereDate('created_at', today()->subDays(2))->count();
*/
        $id=2;
        $offre = Candidate::find(2)->offre()->where('offre_id','=',5);
        //Pie Chart Start
        $piesql = Offre::select('city' ,DB::raw('count(*) as total'))
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
        $chart->dataset('My dataset', 'pie', $values)->backgroundColor(['red','blue']);
        $chart->options([
        'scales' => [
            'xAxes' => [
                'display' => false],
            'yAxes' => [
                'display' => false],
        ],]);
        //Pie Chart End

        //Bar Chart Start
        $year = 2010;
        $barsql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))/*->whereYear('created_at',$year)*/
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
        $linesql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->where('type','=','stage')/*->whereYear('created_at',$year)*/
        ->groupBy('month')
        ->get();
        $stagevalues = $linesql->map(function ($item) {
            return $item->total;
        });

        $linesql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->where('type','=','cdi')/*->whereYear('created_at',$year)*/
        ->groupBy('month')
        ->get();
        $cdivalues = $linesql->map(function ($item) {
            return $item->total;
        });

        $linesql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))->where('type','=','cdd')/*->whereYear('created_at',$year)*/
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
        ->where('employers.id','=',$id)//,'and','candidate_offre.apply','=',true)
        ->groupBy('month')
        ->get();
        $barvaluesPostule = $sql->map(function ($item) {
            return $item->total;
        });

        $sql = DB::table('candidates')
        ->join('candidate_offre','candidate_offre.candidate_id','=','candidates.id')
        ->join('offres','offres.id','=','candidate_offre.offre_id')
        ->join('employers','employers.id','=','offres.employer_id')
        ->select(DB::raw('count(*) as total'), DB::raw('MONTH(candidate_offre.created_at) month'))
        ->where('employers.id','=',$id)//,'and','candidate_offre.spontane','=',true)
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

        return view('test', ['chart' => $chart,'bar' => $bar, 'line' => $line, 'barcandidat' => $barcandidat]);
    }
}
