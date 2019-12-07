<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = [
        'title', 'intitule', 'type', 'domaine',
        'diplome', 'anneesExperience', 'description',
        'lieuTravaille', 'competence', 'remuniration',
        'date_depot', 'status', 'date_prevue', 'duree_stage',
    ];

    public function candidate()
    {
        return $this->belongsToMany(Candidate::class);
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
