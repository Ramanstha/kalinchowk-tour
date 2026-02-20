<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Package;
use App\Models\Gallery;
use App\Models\Team;


class PagesController extends Controller
{
    public function gallery(){
        $gallery=Gallery::orderby('id','desc')->get();
         $galleryItems = Gallery::orderby('id','desc')->paginate(12);
        return view('frontend.content.gallery',compact('gallery','galleryItems'));
    }

    public function ourteam(){
        $team=Team::orderby('id','desc')->get();
        return view('frontend.content.team',compact('team'));
    }

    public function blog(){
        $blog=Blog::orderby('id','asc')->take(6)->get();
        $recent=Blog::orderby('id','desc')->take(4)->get();
        $category=Package::orderby('id','desc')->get();
        return view('frontend.content.blog',compact('blog','category','recent'));
    }

    public function blogdetail($id){
        $blog=Blog::orderby('id','asc')->get();
        $recent=Blog::orderby('id','desc')->take(4)->get();
        $category=Package::orderby('id','desc')->get();
        $getdetail=Blog::findOrFail($id);
        if(!$getdetail){
            abort(404);
        }
        return view('frontend.content.blog_detail',compact('category','getdetail','recent','blog'));
    }

    public function packagedetail($id){
        $blog=Blog::orderby('id','asc')->get();
        $recent=Blog::orderby('id','desc')->take(4)->get();
        $category=Package::orderby('id','desc')->get();
        $packages=Package::orderby('id','desc')->get();
        $packagedetail=Package::findOrFail($id);
        if(!$packagedetail){
            abort(404);
        }
        return view('frontend.content.package_detail',compact('packages','category','packagedetail','recent','blog'));
    }

}
