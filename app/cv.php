<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidate;
class Cv extends Model
{
    protected $fillable = [
        'idCandidate'
    ];

    public function candidate(){
        $this->belongsTo(Candidate::class);
    }
}
