<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Employer;
use App\Candidate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\http\Controllers\imageController as Image;

class RecruteurController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    public function editProfile(Request $request){

        $this->validator($request->all())->validate();
        if(Auth::guard('employer')->check()){
        $id = Auth::guard('employer')->user()->id;
        $user = Employer::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->civilite = $request->civilite;
        $user->telephone = $request->telephone;
        $user->fonction = $request->fonction;
        $user->google = $request->google;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->linkedin = $request->linkedin;
        $user->cantact_email = $request->cantact_email;
        image::uploadImage($id, "employer", $request);
        $user->save();
        }
        return view('test', ['candidat' => $user]);
    }

    public function test(Request $request){

        if(Auth::guard('employer')->check()){
        $id = Auth::guard('employer')->user()->id;
        $user = Employer::find($id);
        image::uploadImage($id, "employer", $request);
        }
        return view('test', ['candidat' => $user]);
    }

    public function postNewJob(Request $request)
    {
        Offre::create([
            //fill all that's not null
        ]);
        return redirect('/');
    }
}
