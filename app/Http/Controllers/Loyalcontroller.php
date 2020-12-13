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
        function usermail(){
            $validation=request()->validate([
                "userName"=>"required",
                "userEmail"=>"required"
            ]);
            if($validation){
                $usermail=new useremail();
                $usermail->username=request()->userName;
                $usermail->useremail=request()->userEmail;
                $usermail->save();
                return redirect()->route('registered');
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
        function Prayuser(){
            $validation=request()->validate([
                "Prayname"=>"required",
                "Prayselect"=>"required",
                "Praytextarea"=>"required"
            ]);
            if($validation){
                $praycontact=new Praycontact();
                $praycontact->prayname=request()->Prayname;
                $praycontact->prayselect=request()->Prayselect;
                $praycontact->praytextarea=request()->Praytextarea;
                $praycontact->save();
                return back()->with("pray","Success! I will get back to you soon.");
            }else{
                return back()->withErrors($validation);
            }
        }
}   
