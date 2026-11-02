<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Usermessage;
use File;

class ContactController extends Controller
{
    public function View(){
        $contact=Contact::orderby('id','desc')->get();
        return view('backend.contact.view',['contact'=>$contact]);
    }

    public function Contact(){
        return view('backend.contact.create');
    }

    public function Store(ContactRequest $request){

        $data=$request->except('_token');
        $data=Contact::create($data);
        return redirect()->route('view.contact')->with('message','Data Inserted Successfully');

    }

    public function Edit($id){
        $data=Contact::findOrFail($id);
        return view('backend.contact.edit',['data'=>$data]);
    }

    public function Update(ContactRequest $request,$id){
        $data=Contact::findOrFail($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.contact')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Contact::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }



    public function viewUserContactMessage(){
        $viewUserMessage=Usermessage::orderby('id','desc')->get();
        return view('backend.usermessage.view',['viewUserMessage'=>$viewUserMessage]);
    }
        
    public function viewUserMessage($id){
        $userMessage=Usermessage::findOrfail($id);
        return view('backend.usermessage.contactmessage',['userMessage'=>$userMessage]);
    }
    
    public function userMessageDelete($id){
        $userMessageDelete=Usermessage::findOrFail($id);
        $userMessageDelete->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }

}
