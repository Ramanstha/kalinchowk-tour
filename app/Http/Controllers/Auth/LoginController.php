<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function Login(){
        return view('auth.login');
    }

    public function Postlogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->back()->withInput($request->only('email'))->with('message','Login details are not valid');
        }
    }

    public function Logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
