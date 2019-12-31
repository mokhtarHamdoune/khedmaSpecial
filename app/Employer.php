<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Offre;

class Employer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'employer';

    protected $fillable = [
        'name', 'email', 'password', 'image',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function offre()
    {
        return $this->hasMany(Offre::class);
    }

    public function candidate()
    {
        return $this->hasManyThrough('App\candidate_offre', 'App\Offre', 'employer_id', 'offre_id');
    }

}
