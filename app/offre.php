<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = [
        'title', 'country', 'type', 'domaine',
        'diplome', 'anneesExperience', 'description',
        'lieuTravailleExact', 'competence', 'remuniration',
        'city', 'status', 'latitude', 'longitude','duree_stage'
    ];

    public function candidate()
    {
        return $this->belongsToMany(Candidate::class);
    }

    public function employer()
    {
        return $this->belongsTo('App\Employer');
    }
}
