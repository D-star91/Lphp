<?php

namespace App\Http\Controllers;

use App\Models\useremail;
use Illuminate\Http\Request;

class Loyalcontroller extends Controller
{

        function index(){
            return view("index");
        }
        function usermail(Request $req){
            $validation=$req->validate([
                "userName"=>"required",
                "userEmail"=>"required"
            ]);
            if($validation){
                $usermail=new useremail();
                $usermail->username=$req->userName;
                $usermail->useremail=$req->userEmail;
                $usermail->save();
                return redirect("Registered");
            }else{
                return back()->withErrors($validation);
            }
        }
        function Bible(){
            return view("Bible");
        }
        function Book(){
            return view("Book");
        }
        function About(){
            return view("About");
        }
        function Registe(){
            return view("Registered");
        }
        // Prayer
        function Prayer(){
            return view("Prayer");
        }
        function Prayuser(Request $req){
            $validation=$req->validate([
                "prayname"=>"required",
                "prayselect"=>"required",
                "praytextarea"=>"required"
            ]);
            if($validation){
                $Prayname=$req->prayname;
                $Prayselect=$req->prayselect;
                $Praytextar=$req->praytextarea;
                return back()->with("pray");
            }else{
                return back()->withErrors($validation);
            }
        }
        // Bible Study
        function Biblestudy(){
            return view("Biblestudy");
        }
        function StudyAcc(){
            return "StudyAcc";
        }
        function BibleLogin(){
            return view("Biblestudy.BibleLogin");
        }
        function BibleSignup(){
            return view("Biblestudy.Biblesignup");
        }
}   
