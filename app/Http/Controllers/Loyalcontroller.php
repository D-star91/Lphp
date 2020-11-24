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
                return back()->with("success","Your email was successful.");
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
        function EmailReg(){
            return view("Registered");
        }

}
