<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PackageRequest;
use App\Models\Package;
use File;

class PackageController extends Controller
{
    public function View(){
        $package = Package::orderby('id','desc')->get();
        return view('backend.package.view',['package'=>$package]);
    }

    public function Package(){
        return view('backend.package.create');
    }

    Public function Store(PackageRequest $request){
        $data = $request->except('_token','image');
    if ($request->file('image')){
        $filename1 = $request->file('image');
        $file1 = time() . '-' . 'image' . '.' . $filename1->getClientOriginalExtension();
        $destination = public_path('storage/package/');
        $filename1->move($destination, $file1);
        $data['image']=$file1;
        }
        $package = Package::insert($data);
        return redirect()->route('view.package')->with('message','Data Inserted Successfully !!!');

    }

    public function Edit($id){
        $data=Package::find($id);
        return view('backend.package.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data1=Package::find($id);
        $data = $request->except('_token','image');
        if ($request->file('image')){
            File::delete(public_path('storage/package/'.$data1->image));
            $filename1 = $request->file('image');
            $file1 = time() . '-' . 'image' . '.' . $filename1->getClientOriginalExtension();
            $destination=public_path('storage/package/');
            $filename1->move($destination,$file1);
            $data['image']=$file1;
        }
        
        $data1->update($data);
        return redirect()->route('view.package')->with('message','Data Updated Successfully!!!');
    }

    public function Delete($id){
        $data=Package::find($id);
        $img_path=public_path('storage/package/').$data->image;
        if(file_exists($img_path) && $data->image!=null){
            unlink($img_path);
            $data->delete();
        }
        else{
            $data->delete();
        }
        return redirect()->back()->with('message',"Data Deleted Successfully!!!");
    }
}
