<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biblecontroller extends Controller
{
    // Matthew
    function Matthew1(){
        return view("Bible.new.Matthew.matthew1");
    }
    function Matthew2(){
        return view("Bible.new.Matthew.matthew2");
    }
    function Matthew3(){
        return view("Bible.new.Matthew.matthew3");
    }
    // main
    function Bible(){
        return view("Bible");
    }
}
