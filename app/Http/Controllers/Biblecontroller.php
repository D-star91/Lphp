<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biblecontroller extends Controller
{
    function Matthew(){
        return view("Bible.new.Matthew.matthew1");
    }
    function Bible(){
        return view("Bible");
    }
}
