<?php

use App\Http\Controllers\Biblecontroller;
use App\Http\Controllers\Bookcontroller;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\Loyalcontroller;
use App\Http\Controllers\Studycontroller;
use Illuminate\Support\Facades\Route;



// Bible study
Route::middleware('study')->group(function(){
// Bible user accout
Route::get("/Bible_study_home",[Studycontroller::class,"BibleStudy"]) ->name("BibleStudy");
Route::get("/Bible_lesson",[Studycontroller::class,"Biblelesson"]) ->name("Biblelesson");
// Bible user profile
Route::get("/Bible_study/userprofile",[Studycontroller::class,"Userprofile"]) ->name("Bprofile");
Route::post("/Bible_study/userprofile",[Studycontroller::class,"Changeprofile"]) ->name("Chprofile");
// Bible study loguot
Route::get("/Bible_study/logout",[Studycontroller::class,"Biblogout"])->name("biblogout");
// Lesson
Route::get("/Bible_bfam_1",[Studycontroller::class,"Bfam_1"]) ->name("bfam_1");
});
// Guest
Route::middleware('guest')->group(function(){

Route::get("/",[Loyalcontroller::class,"index"]) ->name("home");
Route::post("/",[Loyalcontroller::class,"usermail"])->name("usermail");

Route::get("/Book",[Loyalcontroller::class,"Book"]) ->name("book");
Route::get("/Contact",[Contactcontroller::class,"Contact"]) ->name("contact");
Route::post("/Contact",[Contactcontroller::class,"usercontact"]) ->name("usercontact");
Route::get("/About",[Loyalcontroller::class,"About"]) ->name("about");
Route::get("/Registered",[Loyalcontroller::class,"Registe"]) ->name("registered");

// Prayer
Route::get("/Prayer",[Loyalcontroller::class,"Prayer"]) ->name("prayer");
Route::post("/Prayer",[Loyalcontroller::class,"Prayuser"]) ->name("prayuser");
// Prayer
     // Bible study
    Route::get("/Bible_Study/home",[Studycontroller::class,"Biblehome"]) ->name("Biblehome");
    Route::post("/Bible_Study/home",[Studycontroller::class,"StudyAcc"]) ->name("studyacc");
    // Bible study login&regester
    Route::get("/Bible_Study/login",[Studycontroller::class,"BibleLogin"]) ->name("Biblelogin");
    Route::post('/Bible_Study/login',[Studycontroller::class,"Biblelog"]) ->name("biblelog");
    Route::get("/Bible_Study/register",[Studycontroller::class,"BibleSignup"]) ->name("Biblesignup");
    Route::post("/Bible_Study/register",[Studycontroller::class,"BibleSig"]) ->name("biblesig");

// Testimony
Route::get("/Testimony_Form",[Contactcontroller::class,"Testimony"])->name("Testimony");
Route::post("/Testimony_Form",[Contactcontroller::class,"Testimony_post"])->name("Testimony_post");
Route::get("/Testimony_Posts",[Contactcontroller::class,"Testposts"])->name('testposts');
Route::get("/posts",[Contactcontroller::class,"ShowpostID"])->name('ShowpostID');
// Testimony


// Book
Route::get("/FatherHood",[Bookcontroller::class,"Fatherhood"]) ->name("fatherhood");
// Book

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
Route::get("/Bible/New/Mark2",[Biblecontroller::class,"Mark2"])->name("mark2");
Route::get("/Bible/New/Mark3",[Biblecontroller::class,"Mark3"])->name("mark3");
Route::get("/Bible/New/Mark4",[Biblecontroller::class,"Mark4"])->name("mark4");
Route::get("/Bible/New/Mark5",[Biblecontroller::class,"Mark5"])->name("mark5");
Route::get("/Bible/New/Mark6",[Biblecontroller::class,"Mark6"])->name("mark6");
Route::get("/Bible/New/Mark7",[Biblecontroller::class,"Mark7"])->name("mark7");
Route::get("/Bible/New/Mark8",[Biblecontroller::class,"Mark8"])->name("mark8");
Route::get("/Bible/New/Mark9",[Biblecontroller::class,"Mark9"])->name("mark9");
Route::get("/Bible/New/Mark10",[Biblecontroller::class,"Mark10"])->name("mark10");
Route::get("/Bible/New/Mark11",[Biblecontroller::class,"Mark11"])->name("mark11");
Route::get("/Bible/New/Mark12",[Biblecontroller::class,"Mark12"])->name("mark12");
Route::get("/Bible/New/Mark13",[Biblecontroller::class,"Mark13"])->name("mark13");
Route::get("/Bible/New/Mark14",[Biblecontroller::class,"Mark14"])->name("mark14");
Route::get("/Bible/New/Mark15",[Biblecontroller::class,"Mark15"])->name("mark15");
Route::get("/Bible/New/Mark16",[Biblecontroller::class,"Mark16"])->name("mark16");
// Lucke
Route::get("/Bible/New/Luke1",[Biblecontroller::class,"Luke1"])->name("luke1");
Route::get("/Bible/New/Luke2",[Biblecontroller::class,"Luke2"])->name("luke2");
Route::get("/Bible/New/Luke3",[Biblecontroller::class,"Luke3"])->name("luke3");
Route::get("/Bible/New/Luke4",[Biblecontroller::class,"Luke4"])->name("luke4");
Route::get("/Bible/New/Luke5",[Biblecontroller::class,"Luke5"])->name("luke5");
Route::get("/Bible/New/Luke6",[Biblecontroller::class,"Luke6"])->name("luke6");
Route::get("/Bible/New/Luke7",[Biblecontroller::class,"Luke7"])->name("luke7");
Route::get("/Bible/New/Luke8",[Biblecontroller::class,"Luke8"])->name("luke8");
Route::get("/Bible/New/Luke9",[Biblecontroller::class,"Luke9"])->name("luke9");
Route::get("/Bible/New/Luke10",[Biblecontroller::class,"Luke10"])->name("luke10");
Route::get("/Bible/New/Luke11",[Biblecontroller::class,"Luke11"])->name("luke11");
Route::get("/Bible/New/Luke12",[Biblecontroller::class,"Luke12"])->name("luke12");
Route::get("/Bible/New/Luke13",[Biblecontroller::class,"Luke13"])->name("luke13");
Route::get("/Bible/New/Luke14",[Biblecontroller::class,"Luke14"])->name("luke14");
Route::get("/Bible/New/Luke15",[Biblecontroller::class,"Luke15"])->name("luke15");
Route::get("/Bible/New/Luke16",[Biblecontroller::class,"Luke16"])->name("luke16");
Route::get("/Bible/New/Luke17",[Biblecontroller::class,"Luke17"])->name("luke17");
Route::get("/Bible/New/Luke18",[Biblecontroller::class,"Luke18"])->name("luke18");
Route::get("/Bible/New/Luke19",[Biblecontroller::class,"Luke19"])->name("luke19");
Route::get("/Bible/New/Luke20",[Biblecontroller::class,"Luke20"])->name("luke20");
Route::get("/Bible/New/Luke21",[Biblecontroller::class,"Luke21"])->name("luke21");
Route::get("/Bible/New/Luke22",[Biblecontroller::class,"Luke22"])->name("luke22");
Route::get("/Bible/New/Luke23",[Biblecontroller::class,"Luke23"])->name("luke23");
Route::get("/Bible/New/Luke24",[Biblecontroller::class,"Luke24"])->name("luke24");
// John
Route::get("/Bible/New/John1",[Biblecontroller::class,"John1"])->name("john1");
Route::get("/Bible/New/John2",[Biblecontroller::class,"John2"])->name("john2");
Route::get("/Bible/New/John3",[Biblecontroller::class,"John3"])->name("john3");
Route::get("/Bible/New/John4",[Biblecontroller::class,"John4"])->name("john4");
Route::get("/Bible/New/John5",[Biblecontroller::class,"John5"])->name("john5");
Route::get("/Bible/New/John6",[Biblecontroller::class,"John6"])->name("john6");
Route::get("/Bible/New/John7",[Biblecontroller::class,"John7"])->name("john7");
Route::get("/Bible/New/John8",[Biblecontroller::class,"John8"])->name("john8");
Route::get("/Bible/New/John9",[Biblecontroller::class,"John9"])->name("john9");
Route::get("/Bible/New/John10",[Biblecontroller::class,"John10"])->name("john10");
Route::get("/Bible/New/John11",[Biblecontroller::class,"John11"])->name("john11");
Route::get("/Bible/New/John12",[Biblecontroller::class,"John12"])->name("john12");
Route::get("/Bible/New/John13",[Biblecontroller::class,"John13"])->name("john13");
Route::get("/Bible/New/John14",[Biblecontroller::class,"John14"])->name("john14");
Route::get("/Bible/New/John15",[Biblecontroller::class,"John15"])->name("john15");
Route::get("/Bible/New/John16",[Biblecontroller::class,"John16"])->name("john16");
Route::get("/Bible/New/John17",[Biblecontroller::class,"John17"])->name("john17");
Route::get("/Bible/New/John18",[Biblecontroller::class,"John18"])->name("john18");
Route::get("/Bible/New/John19",[Biblecontroller::class,"John19"])->name("john19");
Route::get("/Bible/New/John20",[Biblecontroller::class,"John20"])->name("john20");
Route::get("/Bible/New/John21",[Biblecontroller::class,"John21"])->name("john21");
// Acts
Route::get("/Bible/New/Acts1",[Biblecontroller::class,"Acts1"])->name("acts1");
Route::get("/Bible/New/Acts2",[Biblecontroller::class,"Acts2"])->name("acts2");
Route::get("/Bible/New/Acts3",[Biblecontroller::class,"Acts3"])->name("acts3");
Route::get("/Bible/New/Acts4",[Biblecontroller::class,"Acts4"])->name("acts4");
Route::get("/Bible/New/Acts5",[Biblecontroller::class,"Acts5"])->name("acts5");
Route::get("/Bible/New/Acts6",[Biblecontroller::class,"Acts6"])->name("acts6");
Route::get("/Bible/New/Acts7",[Biblecontroller::class,"Acts7"])->name("acts7");
Route::get("/Bible/New/Acts8",[Biblecontroller::class,"Acts8"])->name("acts8");
Route::get("/Bible/New/Acts9",[Biblecontroller::class,"Acts9"])->name("acts9");
Route::get("/Bible/New/Acts10",[Biblecontroller::class,"Acts10"])->name("acts10");
Route::get("/Bible/New/Acts11",[Biblecontroller::class,"Acts11"])->name("acts11");
Route::get("/Bible/New/Acts12",[Biblecontroller::class,"Acts12"])->name("acts12");
Route::get("/Bible/New/Acts13",[Biblecontroller::class,"Acts13"])->name("acts13");
Route::get("/Bible/New/Acts14",[Biblecontroller::class,"Acts14"])->name("acts14");
Route::get("/Bible/New/Acts15",[Biblecontroller::class,"Acts15"])->name("acts15");
Route::get("/Bible/New/Acts16",[Biblecontroller::class,"Acts16"])->name("acts16");
Route::get("/Bible/New/Acts17",[Biblecontroller::class,"Acts17"])->name("acts17");
Route::get("/Bible/New/Acts18",[Biblecontroller::class,"Acts18"])->name("acts18");
Route::get("/Bible/New/Acts19",[Biblecontroller::class,"Acts19"])->name("acts19");
Route::get("/Bible/New/Acts20",[Biblecontroller::class,"Acts20"])->name("acts20");
Route::get("/Bible/New/Acts21",[Biblecontroller::class,"Acts21"])->name("acts21");
Route::get("/Bible/New/Acts22",[Biblecontroller::class,"Acts22"])->name("acts22");
Route::get("/Bible/New/Acts23",[Biblecontroller::class,"Acts23"])->name("acts23");
Route::get("/Bible/New/Acts24",[Biblecontroller::class,"Acts24"])->name("acts24");
Route::get("/Bible/New/Acts25",[Biblecontroller::class,"Acts25"])->name("acts25");
Route::get("/Bible/New/Acts26",[Biblecontroller::class,"Acts26"])->name("acts26");
Route::get("/Bible/New/Acts27",[Biblecontroller::class,"Acts27"])->name("acts27");
Route::get("/Bible/New/Acts28",[Biblecontroller::class,"Acts28"])->name("acts28");
//Second Corinthians
Route::get("/Bible/New/2Corinthians1",[Biblecontroller::class,"SecondCorinthians1"])->name("2cor1");
Route::get("/Bible/New/2Corinthians2",[Biblecontroller::class,"SecondCorinthians2"])->name("2cor2");
Route::get("/Bible/New/2Corinthians3",[Biblecontroller::class,"SecondCorinthians3"])->name("2cor3");
Route::get("/Bible/New/2Corinthians4",[Biblecontroller::class,"SecondCorinthians4"])->name("2cor4");
Route::get("/Bible/New/2Corinthians5",[Biblecontroller::class,"SecondCorinthians5"])->name("2cor5");
Route::get("/Bible/New/2Corinthians6",[Biblecontroller::class,"SecondCorinthians6"])->name("2cor6");
Route::get("/Bible/New/2Corinthians7",[Biblecontroller::class,"SecondCorinthians7"])->name("2cor7");
Route::get("/Bible/New/2Corinthians8",[Biblecontroller::class,"SecondCorinthians8"])->name("2cor8");
Route::get("/Bible/New/2Corinthians9",[Biblecontroller::class,"SecondCorinthians9"])->name("2cor9");
Route::get("/Bible/New/2Corinthians10",[Biblecontroller::class,"SecondCorinthians10"])->name("2cor10");
Route::get("/Bible/New/2Corinthians11",[Biblecontroller::class,"SecondCorinthians11"])->name("2cor11");
Route::get("/Bible/New/2Corinthians12",[Biblecontroller::class,"SecondCorinthians12"])->name("2cor12");
Route::get("/Bible/New/2Corinthians13",[Biblecontroller::class,"SecondCorinthians13"])->name("2cor13");
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
});

