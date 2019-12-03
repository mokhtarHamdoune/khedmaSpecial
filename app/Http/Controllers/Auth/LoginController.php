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
    protected $redirectTo = '/home';

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

    public function showEmployerLoginForm()
    {
        return view('login');
    }

    public function employerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
            'role' => Rule::in(['employer'])
        ]);

        if (Auth::guard('employer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/employer');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showCandidateLoginForm()
    {
        return view('login');
    }

    public function candidateLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
            'role' => Rule::in(['candidate'])
        ]);

        if (Auth::guard('candidate')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $id=Auth::guard('candidate')->user()->id;
            return redirect('/',["id"=>$id]);
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
