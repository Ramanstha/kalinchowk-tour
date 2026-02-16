<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use File;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function View(){
        $blog=Blog::orderby('id','desc')->get();
        return view('backend.blog.view',['blog'=>$blog]);
    }

    public function blog(){
        return view('backend.blog.create');
    }

    public function Store(BlogRequest $request){

        $data=$request->except('_token','image');
        $filename = $request->file('image');        
        $file = time() . '-' . 'image' . '.' .$filename->getClientOriginalExtension();
        $destination = public_path('storage/blog/');
        $filename-> move($destination, $file);
        $data['image']=$file;
        $data['created_at']=Carbon::now();
        $data=Blog::insert($data);
        return redirect()->route('view.blog')->with('message','Data Inserted Successfully');
    }

    public function Edit($id){
        $data=Blog::find($id);
        return view('backend.blog.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Blog::find($id);
        $data1=$request->except('_token','image');
        if($request->file('image')){
                File::delete(public_path('storage/blog/'.$data->image));
                $filename=$request->file('image');
                $file= time(). '-'. 'image'. $filename->getClientOriginalExtension();
                $destination=public_path('storage/blog/');
                $filename->move($destination,$file);
                $data1['image']=$file;
        }
        $data->update($data1);
        return redirect()->route('view.blog')->with('message', 'Data Updated Successfully');        
   
    }
    public function Delete($id){
        $data=Blog::find($id);
        $img_path=public_path('storage/blog/').$data->image;
        if(file_exists($img_path) && $data->image!=null){
            unlink($img_path);
            $data->delete();
        }
        else{
            $data->delete();
        }
        return redirect()->back()->with('message','Data Deleted Successfully');
    }

    public function changeStatus(Request $request){
        $blogs = Blog::find($request->blogstatus_id);
        $blogs->status = $request->status;
        $blogs->save();
        return response()->json(['success'=>'User status change successfully.']);
    }
}
