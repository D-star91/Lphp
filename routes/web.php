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
Route::get("/Bible",[Biblecontroller::class,"Bible"])->name("bible");
// New
// Matthew
Route::get("/Bible/New/Matthew1",[Biblecontroller::class,"Matthew1"])->name("mat1");
Route::get("/Bible/New/Matthew2",[Biblecontroller::class,"Matthew2"])->name("mat2");
Route::get("/Bible/New/Matthew3",[Biblecontroller::class,"Matthew3"])->name("mat3");
Route::get("/Bible/New/Matthew4",[Biblecontroller::class,"Matthew4"])->name("mat4");
Route::get("/Bible/New/Matthew5",[Biblecontroller::class,"Matthew5"])->name("mat5");
Route::get("/Bible/New/Matthew6",[Biblecontroller::class,"Matthew6"])->name("mat6");
Route::get("/Bible/New/Matthew7",[Biblecontroller::class,"Matthew7"])->name("mat7");
Route::get("/Bible/New/Matthew8",[Biblecontroller::class,"Matthew8"])->name("mat8");
Route::get("/Bible/New/Matthew9",[Biblecontroller::class,"Matthew9"])->name("mat9");
Route::get("/Bible/New/Matthew10",[Biblecontroller::class,"Matthew10"])->name("mat10");
// Bible