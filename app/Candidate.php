<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Offre;
use App\Cv;
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
    //a candidate has only one cv
    public function cv(){
        return $this->hasMany(Cv::class,"idCandidate");
    }
    
}

