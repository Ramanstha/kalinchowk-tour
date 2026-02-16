<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Gallery;
use App\Models\Aboutus;
use App\Models\Contact;
use App\Models\Package;
use App\Models\Service;
use App\Models\Testimonial;

use App\Models\usermessage;
use App\Http\Requests\UsermessageRequest;

class HomepageController extends Controller
{
    public function Home(){
        $banner=Banner::orderby('id')->get();
        $aboutus=Aboutus::orderby('id','desc')->first();
        $service=Service::orderby('id','desc')->take(3)->get();
        $blog=Blog::orderby('id','desc')->take(3)->get();
        $team=Team::orderby('id','desc')->take(4)->get();
        $gallery=Gallery::get(); 
        $testimonial=Testimonial::orderby('id','desc')->get();
        $packages=Package::orderby('id','desc')->take('6')->get();
        return view('frontend.index',compact('banner','aboutus','service','blog','team','gallery','testimonial','packages'));
    }

    public function about(){
        $banner=Banner::orderby('id')->get();
        $aboutus=Aboutus::orderby('id','desc')->first();
        $team=Team::orderby('id','desc')->get();
        $blog=Blog::orderby('id','desc')->get();
        $gallery=Gallery::get(); 
        $testimonial=Testimonial::orderby('id','desc')->get();
        $packages=Package::orderby('id','desc')->take('6')->get();
        return view('frontend.content.about',compact('banner','aboutus','blog','team','gallery','testimonial','packages')); 
    }

    public function package(){
        $packages=Package::orderby('id','desc')->get();
        $blog=Blog::orderby('id','desc')->take(3)->get();
        return view('frontend.content.package',compact('packages','blog')); 
    }

    public function service(){
        $service=Service::orderby('id','desc')->get();
        $testimonial=Testimonial::orderby('id','desc')->get();
        return view('frontend.content.service',compact('service','testimonial')); 
    }

    public function contact(){
        $contact=Contact::orderby('id','desc')->first();
        return view('frontend.content.contact',compact('contact')); 
    }

    public function storeContactMessage(UsermessageRequest $request){
        $data=$request->except('_token');
        $data=usermessage::insert($data);
        return redirect()->route('contact-us')->with('message','Data Inserted Successfully');

    }
}
