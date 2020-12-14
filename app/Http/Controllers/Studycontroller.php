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
    function Userprofile(){
        return view("Biblestudy.Bible_Study_User.Bprofile");
    }
    function Changeprofile(){
        $name=request('name');
        $email=request('email');
        $old_password=request('old_password');
        $new_password=request('new_password');
        
        $id=auth()->user()->id;
        $current_user=User::find($id);
        $current_user->name=$name;
        $current_user->email=$email;
        
        if($old_password && $new_password){
            if(Hash::check($old_password,$current_user->password)){
                $current_user->password=$new_password;
                $current_user->update();
                return back()->with('success','password changed');
            }else{
                return back()->with('error','old password is not same');
            }
        }
        $current_user->update();
        return back();
        
    }
    // Bible Study
}
