<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidate;
use App\Experience;
use App\Competence;
use App\Formation;
use App\Document;
class Cv extends Model
{
    protected $fillable = [
        'idCandidate'
    ];

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
    public function formation(){
        return $this->hasMany(Formation::class,"idCV")->latest();
    }
    public function experience(){
       return  $this->hasMany(Experience::class,"idCv")->latest();
    }
    public function competence(){
        return $this->hasMany(Competence::class,"idCV")->latest();
    }
    public function document(){
        return $this->hasMany(Document::class,"idCV")->latest();
    }
}
