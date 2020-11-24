<?php

namespace App\Http\Controllers;

use App\Models\usercontact;
use Illuminate\Http\Request;

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
}
