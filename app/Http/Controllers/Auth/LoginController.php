<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:employer')->except('logout');
        $this->middleware('guest:candidate')->except('logout');
    }

    public function Role(Request $request)
    {
        if($request['role']=="employer")
        return $this->employerLogin($request);
        elseif($request['role']=="candidate")
        return $this->candidateLogin($request);
        else
        return view('/');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function employerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('employer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/recruteur');
        }
        return back()->withInput($request->only('email', 'remember'))->with(['user' => 'no account found with the provided email and password']);
    }

    public function candidateLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('candidate')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/');
            /*
            $id=Auth::guard('candidate')->user()->id;
            return redirect('/',["id"=>$id]);
            */
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
