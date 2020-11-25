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
    function Matthew4(){
        return view("Bible.new.Matthew.matthew4");
    }
    function Matthew5(){
        return view("Bible.new.Matthew.matthew5");
    }
    function Matthew6(){
        return view("Bible.new.Matthew.matthew6");
    }
    function Matthew7(){
        return view("Bible.new.Matthew.matthew7");
    }
    function Matthew8(){
        return view("Bible.new.Matthew.matthew8");
    }
    function Matthew9(){
        return view("Bible.new.Matthew.matthew9");
    }
    function Matthew10(){
        return view("Bible.new.Matthew.matthew10");
    }
    // main
    function Bible(){
        return view("Bible");
    }
}
