<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showData(){
        $showData = Post::simplepaginate(5);

        return view('show_data', [
            'showData'=> $showData
        ]);
    }

    public function AddData(){
        return view('add_data');
    }

    public function StoreData(Request $request){
        $rules = [
            'email'=>'required|email',
            'name'=>'required|max:30',
        ];

        $customMessage = [
            'email.required'=>'Enter Your email',
            'name.required'=>'Enter Your Name',
        ];

        $this->validate($request, $rules, $customMessage);

        Post::create([
            'email'=> $request->email,
            'name'=> $request->name,
        ]);

        return redirect()->back()->with('msg','Data Successfully Added');
    }
    public function editData($id=null){

        $editData = Post::find($id);
        return view('edit_data',compact ('editData'));
    }

    //update data
    public function updateData(Request $request,$id){
       $post = Post::find($id);
       $post->email= $request->email;
       $post->name= $request->name;
        $post->save();
        return redirect('/')->with('msg','Data Successfully Updated');
    }
    //delete data
    public function deleteData($id=null){
        $deleteData = Post::find($id);
        $deleteData->delete();
        return redirect('/')->with('msg','Data Successfully Deleted');
    }

}

