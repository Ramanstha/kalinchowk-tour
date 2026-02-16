<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use File;

class TeamController extends Controller
{
    public function View(){
        $team=Team::orderby('id','desc')->get();
        return view('backend.team.view',['team'=>$team]);
    }

    public function team(){
        return view('backend.team.create');
    }

    public function Store(TeamRequest $request){

        $data=$request->except('_token','image');
        $filename = $request->file('image');        
        $file = time() . '-' . 'image' . '.' .$filename->getClientOriginalExtension();
        $destination = public_path('storage/team/');
        $filename-> move($destination, $file);
        $data['image']=$file;
        $data=Team::insert($data);
        return redirect()->route('view.team')->with('message','Data Inserted Successfully');
    }

    public function Edit($id){
        $data=Team::find($id);
        return view('backend.team.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Team::find($id);
        $data1=$request->except('_token','image');
        if($request->file('image')){
                File::delete(public_path('storage/team/'.$data->image));
                $filename=$request->file('image');
                $file= time(). '-'. 'image'. $filename->getClientOriginalExtension();
                $destination=public_path('storage/team/');
                $filename->move($destination,$file);
                $data1['image']=$file;
        }
        $data->update($data1);
        return redirect()->route('view.team')->with('message', 'Data Updated Successfully');        
   
    }
    public function Delete($id){
        $data=Team::find($id);
        $img_path=public_path('storage/team/').$data->image;
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
