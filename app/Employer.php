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
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function offre()
    {
        return $this->hasMany(Offre::class);
    }
}
