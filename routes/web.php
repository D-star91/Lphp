<?php

use App\Http\Controllers\Biblecontroller;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\Loyalcontroller;
use Illuminate\Support\Facades\Route;

Route::get("/",[Loyalcontroller::class,"index"]) ->name("home");
Route::post("/",[Loyalcontroller::class,"usermail"])->name("usermail");
Route::get("/Registered",[Loyalcontroller::class,"EmailReg"])->name("registered");

Route::get("/Book",[Loyalcontroller::class,"Book"]) ->name("book");
Route::get("/Contact",[Contactcontroller::class,"Contact"]) ->name("contact");
Route::post("/Contact",[Contactcontroller::class,"usercontact"]) ->name("usercontact");
Route::get("/About",[Loyalcontroller::class,"About"]) ->name("about");
// Bible
Route::get("/Bible",[Biblecontroller::class,"Bible"]) ->name("bible");
// New
Route::get("/Bible/New/Matthew1",[Biblecontroller::class,"Matthew1"]) ->name("mat1");
Route::get("/Bible/New/Matthew2",[Biblecontroller::class,"Matthew2"]) ->name("mat2");
