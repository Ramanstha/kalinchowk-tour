<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
Use File;

class ServiceController extends Controller
{
    public function View(){
        $service=Service::orderby('id','desc')->get();
        return view('backend.service.view',['service'=>$service]);
    }

    public function Service(){
        return view('backend.service.create');
    }

    public function Store(ServiceRequest $request){

        $data=$request->except('_token');
        $data=Service::insert($data);
        return redirect()->route('view.service')->with('message','Data Inserted Successfully');
    }

    public function Edit($id){
        $data=Service::find($id);
        return view('backend.service.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Service::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.service')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Service::find($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
