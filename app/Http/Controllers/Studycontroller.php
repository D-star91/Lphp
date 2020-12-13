<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Author;

class Studycontroller extends Controller
{
    // Bible Study
    function Biblehome(){
        return view("Biblestudy.Biblehome");
    }
    function StudyAcc(){
        return "Work";
    }
    function BibleLogin(){
        return view("Biblestudy.BibleLogin");
    }
    function Biblelog(){
    $validation=request()->validate([
        "email"=>"required",
        "password"=>"required",
        ]);
    if($validation){

        $auth=Auth::attempt(["email"=>request('email'),'password'=>request('password')]);
         if($auth){
            return redirect()->route('Biblelesson');
        }else{
            return back()->with('error','tray again');
        }

    }else{
        return back()->withErrors($validation);
    }
    }
    // Singup
    function BibleSignup(){
        return view("Biblestudy.Biblesignup");
    }
    function BibleSig(){
        $validation=request()->validate([
            "username"=>"required",
            "useremail"=>"required",
            "userpassword"=>"required||min:8",
            // "Userconfipass"=>"required"
        ]);
        if($validation){
            $password=$validation['userpassword'];
            $user=new User();
            $user->name=$validation['username'];
            $user->email=$validation['useremail'];
            $user->password=Hash::make($password);
            // $user->userconfipass=request()->Userconfipass;
            $user->save();
            
            if(Auth::attempt(["email"=>request('useremail'),'password'=>request('userpassword')])){
                return redirect()->route('Biblelesson');
            }
        }else{
            return back()->withErrors($validation);
        }
    }
    // logout
    function Biblogout(){
        Auth::logout();
        return redirect()->route('Biblehome');
    }
    // Bible Acc
    function BibleLesson(){
        return view("Biblestudy.Bible_Study_User.BibleLesson");
    }
    function BibleStudy(){
        return view("Biblestudy.Bible_Study_User.BibleStudy");
    }
    // Bible Study
}
