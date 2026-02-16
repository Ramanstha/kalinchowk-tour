<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SocialMediaRequest;
use App\Models\SocialMedia;
use File;

class SocialMediaController extends Controller
{
    public function View(){
        $socialmedia=SocialMedia::orderBy('id','desc')->get();
        return view('backend.socialmedia.view',['socialmedia'=>$socialmedia]);
    }

    public function Socialmedia(){
        return view('backend.socialmedia.create');
    }

    public function Store(SocialMediaRequest $request){
        $data=$request->except('_token');
        $socialmedia = SocialMedia::insert($data);
        return redirect()->route('view.socialmedia')->with('message','Data Inserted Successfully !!!');
    }

    public function Edit($id){
        $data=SocialMedia::find($id);
        return view('backend.socialmedia.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data1=SocialMedia::find($id);
        $data=$request->except('_token');
        $data1->update($data);
        return redirect()->route('view.socialmedia')->with('message','Data Update Successfully !!!');
    }

    public function Delete($id){
        $data=SocialMedia::find($id);
        $data->delete();
        return redirect()->back()->with('message',"Data Deleted Successfully!!!");
    }
}
