<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Image;
use File;

class GalleryController extends Controller
{
    
    public function View(){
        $gallery=Gallery::orderBy('id','desc')->get();
        return view('backend.gallery.view',['gallery'=>$gallery]);
    }

    public function Gallery(){
        return view('backend.gallery.create');
    }
    
    Public function Store(GalleryRequest $request){
        if ($request->hasFile('image')) {
            foreach($request->file('image') as $image){
                $data['image'] = $this->saveImage($image);
                Gallery::create($data);
            }
        }

        return redirect()->route('view.gallery')->with('message','Data Inserted Successfully !!!');

    }

    public function Edit($id){
        $data=Gallery::findOrFail($id);
        return view('backend.gallery.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4048',
        ]);
        $data1=Gallery::findOrFail($id);
        if ($request->hasFile('image')){
            $this->deleteImage($data1->image);
            $data1->image = $this->saveImage($request->file('image'));
        }

        $data1->save();
        return redirect()->route('view.gallery')->with('message','Data Updated Successfully!!!');
    }

    public function Delete($id){
        $data=Gallery::findOrFail($id);
        $this->deleteImage($data->image);
        $data->delete();
        return redirect()->back()->with('message',"Data Deleted Successfully!!!");
    }

    private function saveImage($image){
        $destinationimage_name = uniqid() . '-destination' . '.webp';
        $destinationPath = public_path('storage/gallery/main');
        $thumbdestinationPath = public_path('storage/gallery/thumbnail');
        File::ensureDirectoryExists($destinationPath);
        File::ensureDirectoryExists($thumbdestinationPath);
        Image::make($image->getRealPath())->encode('webp', 100)->save($destinationPath . '/' . $destinationimage_name);
        Image::make($image->getRealPath())->encode('webp', 100)->resize(374, 321)->save($thumbdestinationPath . '/' . $destinationimage_name);
        return $destinationimage_name;
    }

    private function deleteImage($image){
        if ($image) {
            File::delete(public_path('storage/gallery/main/'.$image));
            File::delete(public_path('storage/gallery/thumbnail/'.$image));
        }
    }
}