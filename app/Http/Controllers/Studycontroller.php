<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studycontroller extends Controller
{
    // Bible Study
    function Biblehome(){
        return view("Biblestudy.Biblehome");
    }
    function StudyAcc(){
        return "StudyAcc";
    }
    function BibleLogin(){
        return view("Biblestudy.BibleLogin");
    }
    function Biblelog(){
        return "login";
    }
    function BibleSignup(){
        return view("Biblestudy.Biblesignup");
    }
    function BibleSig(){
        return "Signup";
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
