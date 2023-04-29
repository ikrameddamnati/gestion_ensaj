<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
{
    return view('auth.login');
}


    public function username()
    {
        return 'email';
    }

    protected function authenticated(Request $request, $user)
    {
        if($user->role == 'admin') {
            return redirect()->route('admin.dashboard');
        }
        elseif ($user->role == 'user') {
            return redirect()->route('user.dashboard');
        }
        else {
            return redirect()->route('home');
        }
    }

    protected function credentials(Request $request)
    {
        $request['Mot_de_passe'] = $request['password'];
        return $request->only($this->username(), 'Mot_de_passe');
    }
}
