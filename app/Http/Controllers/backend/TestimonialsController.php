<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestimonialsRequest;
use App\Models\Testimonial;
use File;

class TestimonialsController extends Controller
{
    public function View(){
        $testimonial=Testimonial::orderby('id','desc')->get();
        return view('backend.testimonial.view',['testimonial'=>$testimonial]);
    }

    public function Testimonials(){
        return view('backend.testimonial.create');
    }

    public function Store(TestimonialsRequest $request){

        $data=$request->except('_token','image');
        $filename = $request->file('image');        
        $file = time() . '-' . 'image' . '.' .$filename->getClientOriginalExtension();
        $destination = public_path('storage/testimonial/');
        $filename-> move($destination, $file);
        $data['image']=$file;
        $data=Testimonial::insert($data);
        return redirect()->route('view.testimonial')->with('message','Data Inserted Successfully');
    }

    public function Edit($id){
        $data=Testimonial::find($id);
        return view('backend.testimonial.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Testimonial::find($id);
        $data1=$request->except('_token','image');
        if($request->file('image')){
                File::delete(public_path('storage/testimonial/'.$data->image));
                $filename=$request->file('image');
                $file= time(). '-'. 'image'. $filename->getClientOriginalExtension();
                $destination=public_path('storage/testimonial/');
                $filename->move($destination,$file);
                $data1['image']=$file;
        }
        $data->update($data1);
        return redirect()->route('view.testimonial')->with('message', 'Data Updated Successfully');        
   
    }
    public function Delete($id){
        $data=Testimonial::find($id);
        $img_path=public_path('storage/testimonial/').$data->image;
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
