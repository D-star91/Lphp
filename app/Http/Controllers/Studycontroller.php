<?php

namespace App\Http\Controllers;

use App\Models\Bfam1answer;
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
            return redirect()->route('BibleStudy');
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
                return redirect()->route('BibleStudy');
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
    // Bible Study
    function BibleStudy(){
        return view("Biblestudy.Bible_Study_User.BibleStudy");
    }
    function Biblelesson(){
        return view("Biblestudy.Bible_Study_User.Catalog");
    }
    // Lesson
    function Bfam_1(){
        return view("Biblestudy.BFAM.Bfam_1");
    }
    function Bfam_post_1(){
        $validation=request()->validate([
            "answer1"=>"required",
            "answer2"=>"required",
            "answer3"=>"required",
            "answer4"=>"required",
            "answer5"=>"required",
            "answer6"=>"required",
            "answer7"=>"required",
            "answer8"=>"required",
            "answer9"=>"required",
            "answer10"=>"required",
        ]);
        if($validation){
            $answer1=request('answer1');
            $answer2=request('answer2');
            $answer3=request('answer3');
            $answer4=request('answer4');
            $answer5=request('answer5');
            $answer6=request('answer6');
            $answer7=request('answer7');
            $answer8=request('answer8');
            $answer9=request('answer9');
            $answer10=request('answer10');

            $bfam1=new Bfam1answer();
            $bfam1->user_id=auth()->user()->id;
            $bfam1->answer1=$answer1;
            $bfam1->answer2=$answer2;
            $bfam1->answer3=$answer3;
            $bfam1->answer4=$answer4;
            $bfam1->answer5=$answer5;
            $bfam1->answer6=$answer6;
            $bfam1->answer7=$answer7;
            $bfam1->answer8=$answer8;
            $bfam1->answer9=$answer9;
            $bfam1->answer10=$answer10;
            $bfam1->save();
            return redirect()->route('bfam_2')->with('message','Receipt received');
        }else{
            return back()->withErrors('$validation');
        }
    }
    function Bfam_2(){
        return view("Biblestudy.BFAM.Bfam_2");
    }
    // Profile
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
                return back()->with('answer','Receipt received');
            }else{
                return back()->with('error','old password is not same');
            }
        }
        $current_user->update();
        return back();
        
    }
    // Bible Study
}
