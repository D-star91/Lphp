<?php

namespace App\Http\Controllers;

use App\Models\Praycontact;
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
            $Prayers=Praycontact::all();
            return view('Prayer',['Prayers'=>$Prayers]);
        }
        function Prayuser(Request $req){
            $validation=$req->validate([
                "Prayname"=>"required",
                "Prayselect"=>"required",
                "Praytextarea"=>"required"
            ]);
            if($validation){
                $praycontact=new Praycontact();
                $praycontact->prayname=$req->Prayname;
                $praycontact->prayselect=$req->Prayselect;
                $praycontact->praytextarea=$req->Praytextarea;
                $praycontact->save();
                return back()->with("pray","Success! I will get back to you soon.");
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
