<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Auth;
use Session;

class LoginController extends Controller
{
    public function Login(){
        return view('auth.login');
    }

    public function Postlogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        else {
            return redirect()->back()->with('message','Login details are not valid');
        }
    }
    
    public function Logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
