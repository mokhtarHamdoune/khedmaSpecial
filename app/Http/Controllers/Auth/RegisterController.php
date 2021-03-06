<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Employer;
use App\Candidate;
use App\Cv;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Database\QueryException;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:employer');
        $this->middleware('guest:candidate');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function Role(Request $request)
    {
        if($request['role']=="employer")
        return $this->createEmployer($request);
        elseif($request['role']=="candidate")
        return $this->createCandidate($request);
        else
        return view('/');
    }

    public function showRegisterForm()
    {
        return view('sign_up');
    }

    protected function createEmployer(Request $request)
    {
        $this->validator($request->all())->validate();
        try{
        $employer = Employer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'image' => 'noimage.jpg',
        ]);
        }
        catch (QueryException $e){
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return back()->with(['error' => 'email is already in use, please try another']);
            }
        }
        if (Auth::guard('employer')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        }
    }

    protected function createCandidate(Request $request)
    {

        $this->validator($request->all())->validate();
        try{
            $candidate = Candidate::create([
            'userName' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        }
        catch (QueryException $e){
            $error_code = $e->errorInfo[1];
            if($error_code == 1062){
                return back()->with(['error' => 'email is already in use, please try another']);
            }
        }
        if (Auth::guard('candidate')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        }
    }
}
