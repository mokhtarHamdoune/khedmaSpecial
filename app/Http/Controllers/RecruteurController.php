<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;

class RecruteurController extends Controller
{
    public function postNewJob(Request $request)
    {
        Offre::create([
            //fill all that's not null
        ]);
        return redirect('/');
    }
}
