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
        //Pie Chart Start
        $today_users = Offre::select('city' ,DB::raw('count(*) as total'))
        ->groupBy('city')
        ->get();

        $cities = $today_users->map(function ($item) {
            return $item->city;
        });

        $values = $today_users->map(function ($item) {
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

        $barsql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))/*->whereYear('created_at',$year)*/
        ->groupBy('month')
        ->get();
        $barvalues1 = $barsql->map(function ($item) {
            return $item->total;
        });
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
        $bar->dataset('Bars', 'bar', $barvalues);
        $bar->dataset('Bars', 'line', $barvalues1);
        //Bar Chart End

        //Line Chart Start
        $barsql = Offre::select(DB::raw('count(*) as total'), DB::raw('YEAR(created_at) year'), DB::raw('MONTH(created_at) month'))/*->whereYear('created_at',$year)*/
        ->groupBy('month')
        ->get();
        $barvalues = $barsql->map(function ($item) {
            return $item->total;
        });
        $bar0 = new SampleChart;
        $bar0->labels(['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','October','Novembre','Decembre']);
        $bar0->dataset('Bars', 'bar', $barvalues);
        //Line Chart End

        return view('test', ['chart' => $chart,'bar' => $bar, 'bar0' => $bar0,'barsql' => $barsql]);
    }
}
