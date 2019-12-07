<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Employer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class RecruteurController extends Controller
{

    public function uploadImage(Request $request)
    {
        if(Auth::guard('employer')->check()){
            if($request->image)
            {
                $fileNameWithExt = $request->file('image')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                $path = $request->file('image')->storeAs('public/profile_images', $fileNameToStore);
            }
            else
            {
                $fileNameToStore = "noimage.jpg"; //default image
            }
            $id = Auth::guard('employer')->user()->id;
            $user = Employer::find($id);
            File::delete(app_path('public/storage/profile_images/'.$user->image));
            $user->image = $fileNameToStore;
            $user->save();
            return redirect('/');
        }
        return redirect('/');
    }

    public function postNewJob(Request $request)
    {
        Offre::create([
            //fill all that's not null
        ]);
        return redirect('/');
    }
}
