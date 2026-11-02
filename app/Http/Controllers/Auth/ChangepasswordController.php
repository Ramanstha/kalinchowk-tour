<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ChangepasswordRequest;
use Hash;
use Auth;

class ChangepasswordController extends Controller
{
    public function changePassword(){

        return view('auth.changepassword');
    }

    public function updateNewPassword(ChangepasswordRequest $request){

        //Match The Old Password 
        if(!Hash::check($request->oldpassword, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        //Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->newpassword)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
}
