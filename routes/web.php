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
Route::get("/Registered",[Loyalcontroller::class,"Registe"]) ->name("registe");
// Prayer
Route::get("/Prayer",[Loyalcontroller::class,"Prayer"]) ->name("prayer");
// Prayer

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
Route::get("/Bible/New/Matthew11",[Biblecontroller::class,"Matthew11"])->name("mat11");
Route::get("/Bible/New/Matthew12",[Biblecontroller::class,"Matthew12"])->name("mat12");
Route::get("/Bible/New/Matthew13",[Biblecontroller::class,"Matthew13"])->name("mat13");
Route::get("/Bible/New/Matthew14",[Biblecontroller::class,"Matthew14"])->name("mat14");
Route::get("/Bible/New/Matthew15",[Biblecontroller::class,"Matthew15"])->name("mat15");
Route::get("/Bible/New/Matthew16",[Biblecontroller::class,"Matthew16"])->name("mat16");
Route::get("/Bible/New/Matthew17",[Biblecontroller::class,"Matthew17"])->name("mat17");
Route::get("/Bible/New/Matthew18",[Biblecontroller::class,"Matthew18"])->name("mat18");
Route::get("/Bible/New/Matthew19",[Biblecontroller::class,"Matthew19"])->name("mat19");
Route::get("/Bible/New/Matthew20",[Biblecontroller::class,"Matthew20"])->name("mat20");
Route::get("/Bible/New/Matthew21",[Biblecontroller::class,"Matthew21"])->name("mat21");
Route::get("/Bible/New/Matthew22",[Biblecontroller::class,"Matthew22"])->name("mat22");
Route::get("/Bible/New/Matthew23",[Biblecontroller::class,"Matthew23"])->name("mat23");
Route::get("/Bible/New/Matthew24",[Biblecontroller::class,"Matthew24"])->name("mat24");
Route::get("/Bible/New/Matthew25",[Biblecontroller::class,"Matthew25"])->name("mat25");
Route::get("/Bible/New/Matthew26",[Biblecontroller::class,"Matthew26"])->name("mat26");
Route::get("/Bible/New/Matthew27",[Biblecontroller::class,"Matthew27"])->name("mat27");
Route::get("/Bible/New/Matthew28",[Biblecontroller::class,"Matthew28"])->name("mat28");
// Mark
Route::get("/Bible/New/Mark1",[Biblecontroller::class,"Mark1"])->name("mark1");
// Second Corinthians
Route::get("/Bible/New/2Corinthians1",[Biblecontroller::class,"SecondCorinthians1"])->name("gal1");
Route::get("/Bible/New/2Corinthians2",[Biblecontroller::class,"SecondCorinthians2"])->name("gal2");
Route::get("/Bible/New/2Corinthians3",[Biblecontroller::class,"SecondCorinthians3"])->name("gal3");
Route::get("/Bible/New/2Corinthians4",[Biblecontroller::class,"SecondCorinthians4"])->name("gal4");
Route::get("/Bible/New/2Corinthians5",[Biblecontroller::class,"SecondCorinthians5"])->name("gal5");
Route::get("/Bible/New/2Corinthians6",[Biblecontroller::class,"SecondCorinthians6"])->name("gal6");
Route::get("/Bible/New/2Corinthians7",[Biblecontroller::class,"SecondCorinthians7"])->name("gal7");
Route::get("/Bible/New/2Corinthians8",[Biblecontroller::class,"SecondCorinthians8"])->name("gal8");
Route::get("/Bible/New/2Corinthians9",[Biblecontroller::class,"SecondCorinthians9"])->name("gal9");
Route::get("/Bible/New/2Corinthians10",[Biblecontroller::class,"SecondCorinthians10"])->name("gal10");
Route::get("/Bible/New/2Corinthians11",[Biblecontroller::class,"SecondCorinthians11"])->name("gal11");
Route::get("/Bible/New/2Corinthians12",[Biblecontroller::class,"SecondCorinthians12"])->name("gal12");
Route::get("/Bible/New/2Corinthians13",[Biblecontroller::class,"SecondCorinthians13"])->name("gal13");
// Galatians
Route::get("/Bible/New/Galatians1",[Biblecontroller::class,"Galatians1"])->name("gal1");
Route::get("/Bible/New/Galatians2",[Biblecontroller::class,"Galatians2"])->name("gal2");
Route::get("/Bible/New/Galatians3",[Biblecontroller::class,"Galatians3"])->name("gal3");
Route::get("/Bible/New/Galatians4",[Biblecontroller::class,"Galatians4"])->name("gal4");
Route::get("/Bible/New/Galatians5",[Biblecontroller::class,"Galatians5"])->name("gal5");
Route::get("/Bible/New/Galatians6",[Biblecontroller::class,"Galatians6"])->name("gal6");
// Ephesians
Route::get("/Bible/New/Ephesians1",[Biblecontroller::class,"Ephesians1"])->name("eph1");
Route::get("/Bible/New/Ephesians2",[Biblecontroller::class,"Ephesians2"])->name("eph2");
Route::get("/Bible/New/Ephesians3",[Biblecontroller::class,"Ephesians3"])->name("eph3");
Route::get("/Bible/New/Ephesians4",[Biblecontroller::class,"Ephesians4"])->name("eph4");
Route::get("/Bible/New/Ephesians5",[Biblecontroller::class,"Ephesians5"])->name("eph5");
Route::get("/Bible/New/Ephesians6",[Biblecontroller::class,"Ephesians6"])->name("eph6");
// Philippians
Route::get("/Bible/New/Philippians1",[Biblecontroller::class,"Philippians1"])->name("php1");
Route::get("/Bible/New/Philippians2",[Biblecontroller::class,"Philippians2"])->name("php2");
Route::get("/Bible/New/Philippians3",[Biblecontroller::class,"Philippians3"])->name("php3");
Route::get("/Bible/New/Philippians4",[Biblecontroller::class,"Philippians4"])->name("php4");
// Colossians
Route::get("/Bible/New/Colossians1",[Biblecontroller::class,"Colossians1"])->name("col1");
Route::get("/Bible/New/Colossians2",[Biblecontroller::class,"Colossians2"])->name("col2");
Route::get("/Bible/New/Colossians3",[Biblecontroller::class,"Colossians3"])->name("col3");
Route::get("/Bible/New/Colossians4",[Biblecontroller::class,"Colossians4"])->name("col4");
// First Thessalonians
Route::get("/Bible/New/1Thessalonians1",[Biblecontroller::class,"FirstThessalonians1"])->name("1The1");
Route::get("/Bible/New/1Thessalonians2",[Biblecontroller::class,"FirstThessalonians2"])->name("1The2");
Route::get("/Bible/New/1Thessalonians3",[Biblecontroller::class,"FirstThessalonians3"])->name("1The3");
Route::get("/Bible/New/1Thessalonians4",[Biblecontroller::class,"FirstThessalonians4"])->name("1The4");
Route::get("/Bible/New/1Thessalonians5",[Biblecontroller::class,"FirstThessalonians5"])->name("1The5");
// Second Thessalonians
Route::get("/Bible/New/2Thessalonians1",[Biblecontroller::class,"SecondThessalonians1"])->name("2The1");
Route::get("/Bible/New/2Thessalonians2",[Biblecontroller::class,"SecondThessalonians2"])->name("2The2");
Route::get("/Bible/New/2Thessalonians3",[Biblecontroller::class,"SecondThessalonians3"])->name("2The3");
// First Timothy
Route::get("/Bible/New/1Timothy1",[Biblecontroller::class,"FirstTimothy1"])->name("1Tim1");
Route::get("/Bible/New/1Timothy2",[Biblecontroller::class,"FirstTimothy2"])->name("1Tim2");
Route::get("/Bible/New/1Timothy3",[Biblecontroller::class,"FirstTimothy3"])->name("1Tim3");
Route::get("/Bible/New/1Timothy4",[Biblecontroller::class,"FirstTimothy4"])->name("1Tim4");
Route::get("/Bible/New/1Timothy5",[Biblecontroller::class,"FirstTimothy5"])->name("1Tim5");
Route::get("/Bible/New/1Timothy6",[Biblecontroller::class,"FirstTimothy6"])->name("1Tim6");
// Second Timothy
Route::get("/Bible/New/2Timothy1",[Biblecontroller::class,"SecTimothy1"])->name("2Tim1");
Route::get("/Bible/New/2Timothy2",[Biblecontroller::class,"SecTimothy2"])->name("2Tim2");
Route::get("/Bible/New/2Timothy3",[Biblecontroller::class,"SecTimothy3"])->name("2Tim3");
Route::get("/Bible/New/2Timothy4",[Biblecontroller::class,"SecTimothy4"])->name("2Tim4");
// Titus
Route::get("/Bible/New/Titus1",[Biblecontroller::class,"Titus1"])->name("tit1");
Route::get("/Bible/New/Titus2",[Biblecontroller::class,"Titus2"])->name("tit2");
Route::get("/Bible/New/Titus3",[Biblecontroller::class,"Titus3"])->name("tit3");
// Philemon
Route::get("/Bible/New/Philemon1",[Biblecontroller::class,"Philemon1"])->name("Phm1");
// Hebrews
Route::get("/Bible/New/Hebrews1",[Biblecontroller::class,"Hebrews1"])->name("heb1");
Route::get("/Bible/New/Hebrews2",[Biblecontroller::class,"Hebrews2"])->name("heb2");
Route::get("/Bible/New/Hebrews3",[Biblecontroller::class,"Hebrews3"])->name("heb3");
Route::get("/Bible/New/Hebrews4",[Biblecontroller::class,"Hebrews4"])->name("heb4");
Route::get("/Bible/New/Hebrews5",[Biblecontroller::class,"Hebrews5"])->name("heb5");
Route::get("/Bible/New/Hebrews6",[Biblecontroller::class,"Hebrews6"])->name("heb6");
Route::get("/Bible/New/Hebrews7",[Biblecontroller::class,"Hebrews7"])->name("heb7");
Route::get("/Bible/New/Hebrews8",[Biblecontroller::class,"Hebrews8"])->name("heb8");
Route::get("/Bible/New/Hebrews9",[Biblecontroller::class,"Hebrews9"])->name("heb9");
Route::get("/Bible/New/Hebrews10",[Biblecontroller::class,"Hebrews10"])->name("heb10");
Route::get("/Bible/New/Hebrews11",[Biblecontroller::class,"Hebrews11"])->name("heb11");
Route::get("/Bible/New/Hebrews12",[Biblecontroller::class,"Hebrews12"])->name("heb12");
Route::get("/Bible/New/Hebrews13",[Biblecontroller::class,"Hebrews13"])->name("heb13");
// Jame
Route::get("/Bible/New/Jame1",[Biblecontroller::class,"Jame1"])->name("Jam1");
Route::get("/Bible/New/Jame2",[Biblecontroller::class,"Jame2"])->name("Jam2");
Route::get("/Bible/New/Jame3",[Biblecontroller::class,"Jame3"])->name("Jam3");
Route::get("/Bible/New/Jame4",[Biblecontroller::class,"Jame4"])->name("Jam4");
Route::get("/Bible/New/Jame5",[Biblecontroller::class,"Jame5"])->name("Jam5");
// Firest Peter
Route::get("/Bible/New/1Peter1",[Biblecontroller::class,"FirstPeter1"])->name("1Pet1");
Route::get("/Bible/New/1Peter2",[Biblecontroller::class,"FirstPeter2"])->name("1Pet2");
Route::get("/Bible/New/1Peter3",[Biblecontroller::class,"FirstPeter3"])->name("1Pet3");
Route::get("/Bible/New/1Peter4",[Biblecontroller::class,"FirstPeter4"])->name("1Pet4");
Route::get("/Bible/New/1Peter5",[Biblecontroller::class,"FirstPeter5"])->name("1Pet5");
// Second Peter
Route::get("/Bible/New/2Peter1",[Biblecontroller::class,"SecondPeter1"])->name("2Pet1");
Route::get("/Bible/New/2Peter2",[Biblecontroller::class,"SecondPeter2"])->name("2Pet2");
Route::get("/Bible/New/2Peter3",[Biblecontroller::class,"SecondPeter3"])->name("2Pet3");
// First John
Route::get("/Bible/New/1John1",[Biblecontroller::class,"FirstJohn1"])->name("1Joh1");
Route::get("/Bible/New/1John2",[Biblecontroller::class,"FirstJohn2"])->name("1Joh2");
Route::get("/Bible/New/1John3",[Biblecontroller::class,"FirstJohn3"])->name("1Joh3");
Route::get("/Bible/New/1John4",[Biblecontroller::class,"FirstJohn4"])->name("1Joh4");
Route::get("/Bible/New/1John5",[Biblecontroller::class,"FirstJohn5"])->name("1Joh5");
// Second John
Route::get("/Bible/New/2John1",[Biblecontroller::class,"SecondJohn1"])->name("2Joh1");
// Third John
Route::get("/Bible/New/3John1",[Biblecontroller::class,"ThirdJohn1"])->name("3Joh1");
// Jude
Route::get("/Bible/New/Jude1",[Biblecontroller::class,"Jude1"])->name("Jud1");
// Revelation
Route::get("/Bible/New/Revelation1",[Biblecontroller::class,"Revelation1"])->name("Rev1");
// New
// Bible