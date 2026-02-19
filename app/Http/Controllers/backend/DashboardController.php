<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usermessage;


class DashboardController extends Controller
{
    public function Dashboard(){
        $messages=Usermessage::orderby('id','desc')->get();
        return view('backend.index',['messages'=>$messages]);
    }

}