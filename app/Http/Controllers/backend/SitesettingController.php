<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;
use App\Http\Requests\SitesettingRequest;
use File;

class SitesettingController extends Controller
{
    public function View(){
        $sitesetting=Sitesetting::orderby('id','desc')->get();
        return view('backend.sitesetting.view',['sitesetting'=>$sitesetting]);
    }

    public function Sitesetting(){
        return view('backend.sitesetting.create');
    }

    public function Store(SitesettingRequest $request){

        $data=$request->except('_token','image');
        $filename = $request->file('image');        
        $file = time() . '-' . 'image' . '.' .$filename->getClientOriginalExtension();
        $destination = public_path('storage/sitesetting/');
        $filename-> move($destination, $file);
        $data['image']=$file;
        $data=Sitesetting::insert($data);
        return redirect()->route('view.sitesetting')->with('message','Data Inserted Successfully');
    }

    public function Edit($id){
        $data=Sitesetting::find($id);
        return view('backend.sitesetting.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Sitesetting::find($id);
        $data1=$request->except('_token','image');
        if($request->file('image')){
                File::delete(public_path('storage/sitesetting/'.$data->image));
                $filename=$request->file('image');
                $file= time(). '-'. 'image'. $filename->getClientOriginalExtension();
                $destination=public_path('storage/sitesetting/');
                $filename->move($destination,$file);
                $data1['image']=$file;
        }
        $data->update($data1);
        return redirect()->route('view.sitesetting')->with('message', 'Data Updated Successfully');        
   
    }
    public function Delete($id){
        $data=Sitesetting::find($id);
        $img_path=public_path('storage/sitesetting/').$data->image;
        if(file_exists($img_path) && $data->image!=null){
            unlink($img_path);
            $data->delete();
        }
        else{
            $data->delete();
        }
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
