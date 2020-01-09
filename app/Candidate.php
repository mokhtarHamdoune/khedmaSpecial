<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Offre;
use App\Cv;
use DB;
class Candidate extends Authenticatable
{
    use Notifiable;

    protected $guard = 'candidate';

    protected $fillable = [
        'userName', 'email', 'password',
    ];

    protected $hidden = [
        'password','remember_token',
    ];

    public function offre()
    {
        return $this->belongsToMany(Offre::class);
    }
    //a candidate has many cv
    public function cv(){
        return $this->hasMany(Cv::class,"idCandidate");
    }
    public function applied_jobs(){
        $offres = DB::table('candidate_offre')->where("candidate_offre.candidate_id","=",$this->id)
        ->join('offres','offres.id','=','candidate_offre.offre_id')
        ->join('employers','employers.id','=','offres.employer_id')
        ->select('offres.*','employers.name as employer',"employers.image as employer_image")->get();
        return $offres;
    }
}

