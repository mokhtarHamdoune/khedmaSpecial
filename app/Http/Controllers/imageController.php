<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Employer;
use Illuminate\Support\Facades\File;

class imageController extends Controller
{
    public static function getUser($id, $role){
        if($role == "employer"){
            $user = Employer::find($id);
        }
        elseif($role == "candidate"){
            $user = Candidate::find($id);
        }

        return $user;
    }

    public static function uploadImage($id, $role,Request $request){
        $user = imageController::getUser($id, $role);
        if($request->image)
            {
                $fileNameWithExt = $request->file('image')->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                $path = $request->file('image')->storeAs('profile_images', $fileNameToStore);
            }
            else
            {
                $fileNameToStore = "noimage.jpg"; //default image khas nzidha f dossier
            }
            imageController::deleteProfileImage($user->id, $role);
            $user->image = $fileNameToStore;
            $user->save();
    }

    public static function deleteProfileImage($id, $role){

        $user = imageController::getUser($id, $role);
        if($user->image != "noimage.jpg")
        File::delete(public_path().'/storage/profile_images/'.$user->image);
    }

    public static function replaceWithDefault($id, $role){

        $user = imageController::getUser($id, $role);
        imageController::deleteProfileImage($user->id, $role);
        $user->image = "noimage.jpg";
        $user->save();
    }
}
