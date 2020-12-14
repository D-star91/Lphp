<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Testimony;
use App\Models\Testimonypost;
use App\Models\Testpost;
use App\Models\usercontact;
use Illuminate\Http\Request;
use PHPUnit\Util\Test;

class Contactcontroller extends Controller
{
    function Contact(){
        return view("Contact");
    }
    function usercontact(Request $req){
        $validation=$req->validate([
            "username"=>"required",
            "useremail"=>"required",
            "userphone"=>"required",
            "usermessage"=>"required",
        ]);
        if($validation){
            $usercontact=new usercontact();
            $usercontact->username=$req->username;
            $usercontact->useremail=$req->useremail;
            $usercontact->userphone=$req->userphone;
            $usercontact->usermessage=$req->usermessage;
            $usercontact->save();
            return back()->with("consuccess","Success! I will get back to you soon.");
        }else{
            return back()->withErrors($validation);
        }
        
    }
    // Testimony
    function Testimony(){
        return view("User.Testimony");
    }
    function Testimony_post(){
        $validation=request()->validate([
            "name"=>"required",
            "testimony"=>"required",
        ]);
        if($validation){
            $test=new Post();
            $test->name=$validation['name'];
            $test->Testimony=$validation['testimony'];
            $test->save();
            return redirect()->route('testposts')->with('message','Your testimony has been received');
        }else{
            return back()->withErrors('$validation');
        }
    }
    function Testposts(){
        $post=Post::all();

        return view('User.Testimony_post',['Testpost'=>$post]);
    }
}
