<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Offre;

class Candidate extends Authenticatable
{
    use Notifiable;

    protected $guard = 'candidate';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function offre()
    {
        return $this->belongsToMany(Offre::class);
    }
}
