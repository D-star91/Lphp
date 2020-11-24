<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biblecontroller extends Controller
{
    function Matthew1(){
        return view("Bible.new.Matthew.matthew1");
    }
    function Matthew2(){
        return view("Bible.new.Matthew.matthew2");
    }
    function Bible(){
        return view("Bible");
    }
}
