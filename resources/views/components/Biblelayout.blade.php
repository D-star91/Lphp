<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyal</title>
    <link rel="stylesheet" href="/Style.css">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
 <!--Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark elegant-color">
    <a class="navbr-font-sty" href="{{route('bible')}}">
      Loyal Bible 
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto mt-2">
            <li class="nav-item">
                <a class="navbr-font-br mr-3" href="{{route('home')}}">HOME
                  <span class="sr-only">(current)</span>
                </a>
            </li>
          <li class="nav-item">
            <a class="navbr-font-br mr-3" href="{{route('bible')}}">BIBLE</a>
          </li>
          <li class="nav-item">
            <a class="navbr-font-br mr-3" data-toggle="modal" data-target="#exampleModal1" href="#">OLD TESTAMENT</a>
          </li>
          <li class="nav-item">
            <a class="navbr-font-br mr-3" data-toggle="modal" data-target="#exampleModal2" href="#">NEW TESTAMENT</a>
          </li>
          <li class="nav-item">
            <a class="navbr-font-br mr-3" href="">VERSES</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


    {{$slot}}
    <hr>
    <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="bible-menu-title">
                  <h3>သမ္မာကျမ်းစာ</h3>
                  <div class="bible-menu-group">
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal1">
                      ဓမ္မဟောင်းကျမ်း
                    </button>
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> ဓမ္မဟောင်းကျမ်း</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="modal-dialog-scrollable">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                          <div class="list-group list-group-flush" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action active" id="list-Genesis-list" data-toggle="list" href="#list-Genesis" role="tab" aria-controls="Genesis">ကမ္ဘာဦးကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Exodus-list" data-toggle="list" href="#list-Exodus" role="tab" aria-controls="Exodus">ထွက်မြောက်ရာကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Leviticus-list" data-toggle="list" href="#list-Leviticus" role="tab" aria-controls="Leviticus">ဝတ်ပြုရာကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Numbers-list" data-toggle="list" href="#list-Numbers" role="tab" aria-controls="Numbers">တောလည်ရာကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Deuteronomy-list" data-toggle="list" href="#list-Deuteronomy" role="tab" aria-controls="Deuteronomy">တရားဟောရာကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Joshua-list" data-toggle="list" href="#list-Joshua" role="tab" aria-controls="Joshua">ယောရှုမှတ်စာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-Judges-list" data-toggle="list" href="#list-Judges" role="tab" aria-controls="Judges">တရားသူကြီးမှတ်စာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-Ruth-list" data-toggle="list" href="#list-Ruth" role="tab" aria-controls="Ruth">ရုသဝတ္ထု</a>
                                            <a class="list-group-item list-group-item-action" id="list-1Samuel-list" data-toggle="list" href="#list-1Samuel" role="tab" aria-controls="1Samuel">ဓမ္မရာဇဝင်ပဌမစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-2Samuel-list" data-toggle="list" href="#list-2Samuel" role="tab" aria-controls="2Samuel">ဓမ္မရာဇဝင်ဒုတိယစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-1Kings-list" data-toggle="list" href="#list-1Kings" role="tab" aria-controls="1Kungs">ဓမ္မရာဇဝင်တတိယစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-2Kings-list" data-toggle="list" href="#list-2Kings" role="tab" aria-controls="2Kings">ဓမ္မရာဇဝင်စတုတ္ထစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-1Chronicles-list" data-toggle="list" href="#list-1Chronicles" role="tab" aria-controls="1Chronicles">ရာဇဝင်ချုပ်ပဌမစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-2Chronicles-list" data-toggle="list" href="#list-2Chronicles" role="tab" aria-controls="2Chronicles">ရာဇာဝင်ချုပ်ဒုတိယစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-Ezra-list" data-toggle="list" href="#list-Ezra" role="tab" aria-controls="Ezra">ဧဇရမှတ်စာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-Nehemiah-list" data-toggle="list" href="#list-Nehemiah" role="tab" aria-controls="Nehemiah">နေဟမိမှတ်စာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-Esther-list" data-toggle="list" href="#list-Esther" role="tab" aria-controls="Esther">ဧသတာဝတ္ထု</a>
                                            <a class="list-group-item list-group-item-action" id="list-Job-list" data-toggle="list" href="#list-Job" role="tab" aria-controls="Job">ယောဘဝတ္ထု</a>
                                            <a class="list-group-item list-group-item-action" id="list-Psalms-list" data-toggle="list" href="#list-Psalms" role="tab" aria-controls="Psalms">ဆာလံကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Proverbs-list" data-toggle="list" href="#list-Proverbs" role="tab" aria-controls="Proverbs">သုတ္တံကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Ecclesiastes-list" data-toggle="list" href="#list-Ecclesiastes" role="tab" aria-controls="Ecclesiastes">ဒေသနာကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Songo-of-Songs-list" data-toggle="list" href="#list-Songo-of-Songs" role="tab" aria-controls="Songo-of-Songs">ရှောလမုန်သီချင်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Isaiah-list" data-toggle="list" href="#list-Isaiah" role="tab" aria-controls="Isaiah">ဟေရှာယအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Jeremiah-list" data-toggle="list" href="#list-Jeremiah" role="tab" aria-controls="Jeremiah">ယေရမိအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Lamentations-list" data-toggle="list" href="#list-Lamentations" role="tab" aria-controls="Lamentations">ယေရမိမြည်တမ်းစကား</a>
                                            <a class="list-group-item list-group-item-action" id="list-Ezekiel-list" data-toggle="list" href="#list-Ezekiel" role="tab" aria-controls="Ezekiel">ယေဇကျေလအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Daniel-list" data-toggle="list" href="#list-Daniel" role="tab" aria-controls="Daniel">ဒံယေလအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Hosea-list" data-toggle="list" href="#list-Hosea" role="tab" aria-controls="Hosea">ဟောရှေအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Joel-list" data-toggle="list" href="#list-Joel" role="tab" aria-controls="Joel">ယောလအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Amos-list" data-toggle="list" href="#list-Amos" role="tab" aria-controls="Amos">အာမုတ်အနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Obadiah-list" data-toggle="list" href="#list-Obadiah" role="tab" aria-controls="Obadiah">ဩဗဒိအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Jonah-list" data-toggle="list" href="#list-Jonah" role="tab" aria-controls="Jonah">ယောနဝတ္ထု</a>
                                            <a class="list-group-item list-group-item-action" id="list-Micah-list" data-toggle="list" href="#list-Micah" role="tab" aria-controls="Micah">မိက္ခာအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Nahum-list" data-toggle="list" href="#list-Nahum" role="tab" aria-controls="Nahum">နာဟုံအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Habakkuk-list" data-toggle="list" href="#list-Habakkuk" role="tab" aria-controls="Habakkuk">ဟဗက္ကုတ်အနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Zephaniah-list" data-toggle="list" href="#list-Zephaniah" role="tab" aria-controls="Zephaniah">ဇေဖနိအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Haggai-list" data-toggle="list" href="#list-Haggai" role="tab" aria-controls="Haggai">ဟဂ္ဂဲဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Nechariah-list" data-toggle="list" href="#list-Nechariah" role="tab" aria-controls="Nechariah">ဇာခရိအနာဂတ္တိကျမ်း</a>
                                            <a class="list-group-item list-group-item-action" id="list-Malachi-list" data-toggle="list" href="#list-Malachi" role="tab" aria-controls="Malachi">မာလခိအနာဂတ္တိကျမ်း</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ml-auto">
                                  <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-Genesis" role="tabpanel" aria-labelledby="list-Genesis-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/G/G1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/G/G2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/G/G3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/G/G4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/G/G5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/G/G6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/G/G7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/G/G8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/G/G9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/G/G10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/G/G11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/G/G12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/G/G13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/G/G14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/G/G15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/G/G16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/G/G17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/G/G18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/G/G19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/G/G20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/G/G21.html" class="btn-g active" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/G/G22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/G/G23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/G/G24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/G/G25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/G/G26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/G/G27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/G/G28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/G/G29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/G/G30.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/G/G31.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          <a href="/Bible/old/G/G32.html" class="btn-g" role="button" aria-pressed="true">၃၂</a>
                                          <a href="/Bible/old/G/G33.html" class="btn-g" role="button" aria-pressed="true">၃၃</a>
                                          <a href="/Bible/old/G/G34.html" class="btn-g" role="button" aria-pressed="true">၃၄</a>
                                          <a href="/Bible/old/G/G35.html" class="btn-g" role="button" aria-pressed="true">၃၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/G/G36.html" class="btn-g" role="button" aria-pressed="true">၃၆</a>
                                          <a href="/Bible/old/G/G37.html" class="btn-g" role="button" aria-pressed="true">၃၇</a>
                                          <a href="/Bible/old/G/G38.html" class="btn-g" role="button" aria-pressed="true">၃၈</a>
                                          <a href="/Bible/old/G/G39.html" class="btn-g" role="button" aria-pressed="true">၃၉</a>
                                          <a href="/Bible/old/G/G40.html" class="btn-g" role="button" aria-pressed="true">၄၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/G/G41.html" class="btn-g" role="button" aria-pressed="true">၄၁</a>
                                          <a href="/Bible/old/G/G42.html" class="btn-g" role="button" aria-pressed="true">၄၂</a>
                                          <a href="/Bible/old/G/G43.html" class="btn-g" role="button" aria-pressed="true">၄၃</a>
                                          <a href="/Bible/old/G/G44.html" class="btn-g" role="button" aria-pressed="true">၄၄</a>
                                          <a href="/Bible/old/G/G45.html" class="btn-g" role="button" aria-pressed="true">၄၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/G/G46.html" class="btn-g" role="button" aria-pressed="true">၄၆</a>
                                          <a href="/Bible/old/G/G47.html" class="btn-g" role="button" aria-pressed="true">၄၇</a>
                                          <a href="/Bible/old/G/G48.html" class="btn-g" role="button" aria-pressed="true">၄၈</a>
                                          <a href="/Bible/old/G/G49.html" class="btn-g" role="button" aria-pressed="true">၄၉</a>
                                          <a href="/Bible/old/G/G50.html" class="btn-g" role="button" aria-pressed="true">၅၀</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-Exodus" role="tabpanel" aria-labelledby="list-Exodus-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ex/ex1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Ex/ex2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Ex/ex3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Ex/ex4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Ex/ex5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ex/ex6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Ex/ex7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Ex/ex8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Ex/ex9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Ex/ex10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ex/ex11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Ex/ex12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Ex/ex13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Ex/ex14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Ex/ex15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ex/ex16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Ex/ex17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Ex/ex18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Ex/ex19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Ex/ex20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ex/ex21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/Ex/ex22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/Ex/ex23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/Ex/ex24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/Ex/ex25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ex/ex26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/Ex/ex27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/Ex/ex28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/Ex/ex29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/Ex/ex30.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ex/ex31.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          <a href="/Bible/old/Ex/ex32.html" class="btn-g" role="button" aria-pressed="true">၃၂</a>
                                          <a href="/Bible/old/Ex/ex33.html" class="btn-g" role="button" aria-pressed="true">၃၃</a>
                                          <a href="/Bible/old/Ex/ex34.html" class="btn-g" role="button" aria-pressed="true">၃၄</a>
                                          <a href="/Bible/old/Ex/ex35.html" class="btn-g" role="button" aria-pressed="true">၃၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ex/ex36.html" class="btn-g" role="button" aria-pressed="true">၃၆</a>
                                          <a href="/Bible/old/Ex/ex37.html" class="btn-g" role="button" aria-pressed="true">၃၇</a>
                                          <a href="/Bible/old/Ex/ex38.html" class="btn-g" role="button" aria-pressed="true">၃၈</a>
                                          <a href="/Bible/old/Ex/ex39.html" class="btn-g" role="button" aria-pressed="true">၃၉</a>
                                          <a href="/Bible/old/Ex/ex40.html" class="btn-g" role="button" aria-pressed="true">၄၀</a>
                                      </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-Leviticus" role="tabpanel" aria-labelledby="list-Leviticus-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Lev/lev1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Lev/lev2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Lev/lev3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Lev/lev4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Lev/lev5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Lev/lev6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Lev/lev7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Lev/lev8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Lev/lev9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Lev/lev10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Lev/lev11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Lev/lev12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Lev/lev13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Lev/lev14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Lev/lev15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Lev/lev16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Lev/lev17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Lev/lev18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Lev/lev19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Lev/lev20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Lev/lev21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/Lev/lev22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/Lev/lev23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/Lev/lev24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/Lev/lev25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Lev/lev26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/Lev/lev27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-Numbers" role="tabpanel" aria-labelledby="list-Numbers-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Num/num1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Num/num2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Num/num3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Num/num4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Num/num5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Num/num6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Num/num7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Num/num8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Num/num9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Num/num10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Num/num11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Num/num12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Num/num13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Num/num14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Num/num15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Num/num16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Num/num17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Num/num18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Num/num19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Num/num20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Num/num21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/Num/num22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/Num/num23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/Num/num24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/Num/num25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Num/num26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/Num/num27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/Num/num28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/Num/num29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/Num/num30.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Num/num31.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          <a href="/Bible/old/Num/num32.html" class="btn-g" role="button" aria-pressed="true">၃၂</a>
                                          <a href="/Bible/old/Num/num33.html" class="btn-g" role="button" aria-pressed="true">၃၃</a>
                                          <a href="/Bible/old/Num/num34.html" class="btn-g" role="button" aria-pressed="true">၃၄</a>
                                          <a href="/Bible/old/Num/num35.html" class="btn-g" role="button" aria-pressed="true">၃၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Num/num36.html" class="btn-g" role="button" aria-pressed="true">၃၆</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Deuteronomy" role="tabpanel" aria-labelledby="list-Deuteronomy-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Deu/deu1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Deu/deu2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Deu/deu3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Deu/deu4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Deu/deu5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Deu/deu6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Deu/deu7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Deu/deu8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Deu/deu9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Deu/deu10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Deu/deu11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Deu/deu12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Deu/deu13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Deu/deu14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Deu/deu15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Deu/deu16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Deu/deu17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Deu/deu18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Deu/deu19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Deu/deu20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Deu/deu21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/Deu/deu22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/Deu/deu23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/Deu/deu24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/Deu/deu25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Deu/deu26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/Deu/deu27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/Deu/deu28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/Deu/deu29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/Deu/deu30.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Deu/deu31.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          <a href="/Bible/old/Deu/deu32.html" class="btn-g" role="button" aria-pressed="true">၃၂</a>
                                          <a href="/Bible/old/Deu/deu33.html" class="btn-g" role="button" aria-pressed="true">၃၃</a>
                                          <a href="/Bible/old/Deu/deu34.html" class="btn-g" role="button" aria-pressed="true">၃၄</a>
                                          
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Joshua" role="tabpanel" aria-labelledby="list-Joshua-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jos/jos1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Jos/jos2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Jos/jos3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Jos/jos4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Jos/jos5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jos/jos6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Jos/jos7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Jos/jos8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Jos/jos9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Jos/jos10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jos/jos11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Jos/jos12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Jos/jos13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Jos/jos14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Jos/jos15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jos/jos16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Jos/jos17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Jos/jos18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Jos/jos19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Jos/jos20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jos/jos21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/Jos/jos22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/Jos/jos23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/Jos/jos24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Judges" role="tabpanel" aria-labelledby="list-Judges-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jug/Jug1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Jug/Jug2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Jug/Jug3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Jug/Jug4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Jug/Jug5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jug/Jug6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Jug/Jug7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Jug/Jug8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Jug/Jug9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Jug/Jug10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jug/Jug11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Jug/Jug12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Jug/Jug13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Jug/Jug14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Jug/Jug15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jug/Jug16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Jug/Jug17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Jug/Jug18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Jug/Jug19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Jug/Jug20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jug/Jug21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Ruth" role="tabpanel" aria-labelledby="list-Ruth-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ru/ru1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Ru/ru2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Ru/ru3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Ru/ru4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-1Samuel" role="tabpanel" aria-labelledby="list-1Samuel-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Sam/1sam1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/1Sam/1sam2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/1Sam/1sam3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/1Sam/1sam4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/1Sam/1sam5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Sam/1sam6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/1Sam/1sam7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/1Sam/1sam8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/1Sam/1sam9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/1Sam/1sam10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Sam/1sam11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/1Sam/1sam12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/1Sam/1sam13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/1Sam/1sam14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/1Sam/1sam15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Sam/1sam16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/1Sam/1sam17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/1Sam/1sam18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/1Sam/1sam19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/1Sam/1sam20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Sam/1sam21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/1Sam/1sam22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/1Sam/1sam23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/1Sam/1sam24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/1Sam/1sam25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Sam/1sam26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/1Sam/1sam27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/1Sam/1sam28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/1Sam/1sam29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/1Sam/1sam30.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Sam/1sam31.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          
                                        </div>
                                      </div>  
                                    </div> 
                                    <div class="tab-pane fade" id="list-2Samuel" role="tabpanel" aria-labelledby="list-2Samuel-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Sam/2sam1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/2Sam/2sam2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/2Sam/2sam3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/2Sam/2sam4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/2Sam/2sam5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Sam/2sam6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/2Sam/2sam7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/2Sam/2sam8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/2Sam/2sam9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/2Sam/2sam10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Sam/2sam11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/2Sam/2sam12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/2Sam/2sam13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/2Sam/2sam14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/2Sam/2sam15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Sam/2sam16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/2Sam/2sam17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/2Sam/2sam18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/2Sam/2sam19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/2Sam/2sam20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Sam/2sam21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/2Sam/2sam22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/2Sam/2sam23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/2Sam/2sam24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-1Kings" role="tabpanel" aria-labelledby="list-1Kings-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                          <div class="btn-group" role="group" aria-label="First group">
                                            <a href="/Bible/old/1Kin/1kin1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                            <a href="/Bible/old/1Kin/1kin2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                            <a href="/Bible/old/1Kin/1kin3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                            <a href="/Bible/old/1Kin/1kin4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                            <a href="/Bible/old/1Kin/1kin5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                          </div>
                                          <div class="btn-group" role="group" aria-label="First group">
                                            <a href="/Bible/old/1Kin/1kin6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                            <a href="/Bible/old/1Kin/1kin7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                            <a href="/Bible/old/1Kin/1kin8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                            <a href="/Bible/old/1Kin/1kin9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                            <a href="/Bible/old/1Kin/1kin10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                          </div>
                                          <div class="btn-group" role="group" aria-label="First group">
                                            <a href="/Bible/old/1Kin/1kin11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                            <a href="/Bible/old/1Kin/1kin12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                            <a href="/Bible/old/1Kin/1kin13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                            <a href="/Bible/old/1Kin/1kin14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                            <a href="/Bible/old/1Kin/1kin15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                          </div>
                                          <div class="btn-group" role="group" aria-label="First group">
                                            <a href="/Bible/old/1Kin/1kin16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                            <a href="/Bible/old/1Kin/1kin17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                            <a href="/Bible/old/1Kin/1kin18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                            <a href="/Bible/old/1Kin/1kin19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                            <a href="/Bible/old/1Kin/1kin20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                          </div>
                                          <div class="btn-group" role="group" aria-label="First group">
                                            <a href="/Bible/old/1Kin/1kin21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                            <a href="/Bible/old/1Kin/1kin22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                            
                                          </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-2Kings" role="tabpanel" aria-labelledby="list-2Kings-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Kin/2kin1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/2Kin/2kin2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/2Kin/2kin3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/2Kin/2kin4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/2Kin/2kin5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Kin/2kin6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/2Kin/2kin7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/2Kin/2kin8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/2Kin/2kin9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/2Kin/2kin10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Kin/2kin11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/2Kin/2kin12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/2Kin/2kin13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/2Kin/2kin14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/2Kin/2kin15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Kin/2kin16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/2Kin/2kin17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/2Kin/2kin18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/2Kin/2kin19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/2Kin/2kin20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Kin/2kin21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/2Kin/2kin22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/2Kin/2kin23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/2Kin/2kin24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/2Kin/2kin25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        
                                    </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-1Chronicles" role="tabpanel" aria-labelledby="list-1Chronicles-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Ch/1ch1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/1Ch/1ch2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/1Ch/1ch3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/1Ch/1ch4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/1Ch/1ch5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Ch/1ch6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/1Ch/1ch7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/1Ch/1ch8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/1Ch/1ch9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/1Ch/1ch10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Ch/1ch11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/1Ch/1ch12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/1Ch/1ch13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/1Ch/1ch14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/1Ch/1ch15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Ch/1ch16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/1Ch/1ch17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/1Ch/1ch8.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/1Ch/1ch19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/1Ch/1ch20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Ch/1ch21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/1Ch/1ch22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/1Ch/1ch23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/1Ch/1ch24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/1Ch/1ch25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/1Ch/1ch26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/1Ch/1ch27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/1Ch/1ch28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/1Ch/1ch29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          
                                        </div>
                                    </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-2Chronicles" role="tabpanel" aria-labelledby="list-2Chronicles-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g active" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၃၂</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၃၃</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၃၄</a>
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၃၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/2Ch/2ch1.html" class="btn-g" role="button" aria-pressed="true">၃၆</a>
                                          
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Ezra" role="tabpanel" aria-labelledby="list-Ezra-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ez/ez1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Ez/ez2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Ez/ez3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Ez/ez4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Ez/ez5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ez/ez6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Ez/ez7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Ez/ez8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Ez/ez9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Ez/ez10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Nehemiah" role="tabpanel" aria-labelledby="list-Nehemiah-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Neh/neh1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Neh/neh2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Neh/neh3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Neh/neh4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Neh/neh5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Neh/neh6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Neh/neh7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Neh/neh8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Neh/neh9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Neh/neh10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Neh/neh11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Neh/neh12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Neh/neh13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Esther" role="tabpanel" aria-labelledby="list-Esther-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                          <div class="btn-group" role="group" aria-label="First group">
                                            <a href="/Bible/old/Est/est1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                            <a href="/Bible/old/Est/est2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                            <a href="/Bible/old/Est/est3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                            <a href="/Bible/old/Est/est4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                            <a href="/Bible/old/Est/est5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                          </div>
                                          <div class="btn-group" role="group" aria-label="First group">
                                            <a href="/Bible/old/Est/est6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                            <a href="/Bible/old/Est/est7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                            <a href="/Bible/old/Est/est8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                            <a href="/Bible/old/Est/est9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                            <a href="/Bible/old/Est/est10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                          </div>
                                        </div>  
                                      </div>
                                    <div class="tab-pane fade" id="list-Job" role="tabpanel" aria-labelledby="list-Job-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Job/job1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Job/job2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Job/job3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Job/job4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Job/job5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Job/job6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Job/job7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Job/job8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Job/job9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Job/job10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Job/job11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Job/job12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Job/job13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Job/job14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Job/job15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Job/job16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Job/job17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Job/job18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Job/job19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Job/job20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Job/job21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/Job/job22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/Job/job23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/Job/job24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/Job/job25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Job/job26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/Job/job27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/Job/job28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/Job/job29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/Job/job30.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Job/job31.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          <a href="/Bible/old/Job/job32.html" class="btn-g" role="button" aria-pressed="true">၃၂</a>
                                          <a href="/Bible/old/Job/job33.html" class="btn-g" role="button" aria-pressed="true">၃၃</a>
                                          <a href="/Bible/old/Job/job34.html" class="btn-g" role="button" aria-pressed="true">၃၄</a>
                                          <a href="/Bible/old/Job/job35.html" class="btn-g" role="button" aria-pressed="true">၃၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Job/job36.html" class="btn-g" role="button" aria-pressed="true">၃၆</a>
                                          <a href="/Bible/old/Job/job37.html" class="btn-g" role="button" aria-pressed="true">၃၇</a>
                                          <a href="/Bible/old/Job/job38.html" class="btn-g" role="button" aria-pressed="true">၃၈</a>
                                          <a href="/Bible/old/Job/job39.html" class="btn-g" role="button" aria-pressed="true">၃၉</a>
                                          <a href="/Bible/old/Job/job40.html" class="btn-g" role="button" aria-pressed="true">၄၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Job/job41.html" class="btn-g" role="button" aria-pressed="true">၄၁</a>
                                          <a href="/Bible/old/Job/job42.html" class="btn-g" role="button" aria-pressed="true">၄၂</a>
                                          
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Psalms" role="tabpanel" aria-labelledby="list-Psalms-list">
                                      <div class="modal-dialog-scrollable">
                                        <div class="modal-content">
                                          <div class="modal-body">
                                            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                                <a href="/Bible/old/Ps/ps2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                                <a href="/Bible/old/Ps/ps3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                                <a href="/Bible/old/Ps/ps4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                                <a href="/Bible/old/Ps/ps5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                                <a href="/Bible/old/Ps/ps7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                                <a href="/Bible/old/Ps/ps8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                                <a href="/Bible/old/Ps/ps9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                                <a href="/Bible/old/Ps/ps10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                                <a href="/Bible/old/Ps/ps12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                                <a href="/Bible/old/Ps/ps13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                                <a href="/Bible/old/Ps/ps14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                                <a href="/Bible/old/Ps/ps15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                                <a href="/Bible/old/Ps/ps17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                                <a href="/Bible/old/Ps/ps18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                                <a href="/Bible/old/Ps/ps19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                                <a href="/Bible/old/Ps/ps20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                                <a href="/Bible/old/Ps/ps22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                                <a href="/Bible/old/Ps/ps23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                                <a href="/Bible/old/Ps/ps24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                                <a href="/Bible/old/Ps/ps25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                                <a href="/Bible/old/Ps/ps27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                                <a href="/Bible/old/Ps/ps28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                                <a href="/Bible/old/Ps/ps29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                                <a href="/Bible/old/Ps/ps30.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps31.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                                <a href="/Bible/old/Ps/ps32.html" class="btn-g" role="button" aria-pressed="true">၃၂</a>
                                                <a href="/Bible/old/Ps/ps33.html" class="btn-g" role="button" aria-pressed="true">၃၃</a>
                                                <a href="/Bible/old/Ps/ps34.html" class="btn-g" role="button" aria-pressed="true">၃၄</a>
                                                <a href="/Bible/old/Ps/ps35.html" class="btn-g" role="button" aria-pressed="true">၃၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps36.html" class="btn-g" role="button" aria-pressed="true">၃၆</a>
                                                <a href="/Bible/old/Ps/ps37.html" class="btn-g" role="button" aria-pressed="true">၃၇</a>
                                                <a href="/Bible/old/Ps/ps38.html" class="btn-g" role="button" aria-pressed="true">၃၈</a>
                                                <a href="/Bible/old/Ps/ps39.html" class="btn-g" role="button" aria-pressed="true">၃၉</a>
                                                <a href="/Bible/old/Ps/ps40.html" class="btn-g" role="button" aria-pressed="true">၄၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps41.html" class="btn-g" role="button" aria-pressed="true">၄၁</a>
                                                <a href="/Bible/old/Ps/ps42.html" class="btn-g" role="button" aria-pressed="true">၄၂</a>
                                                <a href="/Bible/old/Ps/ps43.html" class="btn-g" role="button" aria-pressed="true">၄၃</a>
                                                <a href="/Bible/old/Ps/ps44.html" class="btn-g" role="button" aria-pressed="true">၄၄</a>
                                                <a href="/Bible/old/Ps/ps45.html" class="btn-g" role="button" aria-pressed="true">၄၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps46.html" class="btn-g" role="button" aria-pressed="true">၄၆</a>
                                                <a href="/Bible/old/Ps/ps47.html" class="btn-g" role="button" aria-pressed="true">၄၇</a>
                                                <a href="/Bible/old/Ps/ps48.html" class="btn-g" role="button" aria-pressed="true">၄၈</a>
                                                <a href="/Bible/old/Ps/ps49.html" class="btn-g" role="button" aria-pressed="true">၄၉</a>
                                                <a href="/Bible/old/Ps/ps50.html" class="btn-g" role="button" aria-pressed="true">၅၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps51.html" class="btn-g" role="button" aria-pressed="true">၅၁</a>
                                                <a href="/Bible/old/Ps/ps52.html" class="btn-g" role="button" aria-pressed="true">၅၂</a>
                                                <a href="/Bible/old/Ps/ps53.html" class="btn-g" role="button" aria-pressed="true">၅၃</a>
                                                <a href="/Bible/old/Ps/ps54.html" class="btn-g" role="button" aria-pressed="true">၅၄</a>
                                                <a href="/Bible/old/Ps/ps55.html" class="btn-g" role="button" aria-pressed="true">၅၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps56.html" class="btn-g" role="button" aria-pressed="true">၅၆</a>
                                                <a href="/Bible/old/Ps/ps57.html" class="btn-g" role="button" aria-pressed="true">၅၇</a>
                                                <a href="/Bible/old/Ps/ps58.html" class="btn-g" role="button" aria-pressed="true">၅၈</a>
                                                <a href="/Bible/old/Ps/ps59.html" class="btn-g" role="button" aria-pressed="true">၅၉</a>
                                                <a href="/Bible/old/Ps/ps60.html" class="btn-g" role="button" aria-pressed="true">၆၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps61.html" class="btn-g" role="button" aria-pressed="true">၆၁</a>
                                                <a href="/Bible/old/Ps/ps62.html" class="btn-g" role="button" aria-pressed="true">၆၂</a>
                                                <a href="/Bible/old/Ps/ps63.html" class="btn-g" role="button" aria-pressed="true">၆၃</a>
                                                <a href="/Bible/old/Ps/ps64.html" class="btn-g" role="button" aria-pressed="true">၆၄</a>
                                                <a href="/Bible/old/Ps/ps65.html" class="btn-g" role="button" aria-pressed="true">၆၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps66.html" class="btn-g" role="button" aria-pressed="true">၆၆</a>
                                                <a href="/Bible/old/Ps/ps67.html" class="btn-g" role="button" aria-pressed="true">၆၇</a>
                                                <a href="/Bible/old/Ps/ps68.html" class="btn-g" role="button" aria-pressed="true">၆၈</a>
                                                <a href="/Bible/old/Ps/ps69.html" class="btn-g" role="button" aria-pressed="true">၆၉</a>
                                                <a href="/Bible/old/Ps/ps70.html" class="btn-g" role="button" aria-pressed="true">၇၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps71.html" class="btn-g" role="button" aria-pressed="true">၇၁</a>
                                                <a href="/Bible/old/Ps/ps72.html" class="btn-g" role="button" aria-pressed="true">၇၂</a>
                                                <a href="/Bible/old/Ps/ps73.html" class="btn-g" role="button" aria-pressed="true">၇၃</a>
                                                <a href="/Bible/old/Ps/ps74.html" class="btn-g" role="button" aria-pressed="true">၇၄</a>
                                                <a href="/Bible/old/Ps/ps75.html" class="btn-g" role="button" aria-pressed="true">၇၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps76.html" class="btn-g" role="button" aria-pressed="true">၇၆</a>
                                                <a href="/Bible/old/Ps/ps77.html" class="btn-g" role="button" aria-pressed="true">၇၇</a>
                                                <a href="/Bible/old/Ps/ps78.html" class="btn-g" role="button" aria-pressed="true">၇၈</a>
                                                <a href="/Bible/old/Ps/ps79.html" class="btn-g" role="button" aria-pressed="true">၇၉</a>
                                                <a href="/Bible/old/Ps/ps80.html" class="btn-g" role="button" aria-pressed="true">၈၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps81.html" class="btn-g" role="button" aria-pressed="true">၈၁</a>
                                                <a href="/Bible/old/Ps/ps82.html" class="btn-g" role="button" aria-pressed="true">၈၂</a>
                                                <a href="/Bible/old/Ps/ps83.html" class="btn-g" role="button" aria-pressed="true">၈၃</a>
                                                <a href="/Bible/old/Ps/ps84.html" class="btn-g" role="button" aria-pressed="true">၈၄</a>
                                                <a href="/Bible/old/Ps/ps85.html" class="btn-g" role="button" aria-pressed="true">၈၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps86.html" class="btn-g" role="button" aria-pressed="true">၈၆</a>
                                                <a href="/Bible/old/Ps/ps87.html" class="btn-g" role="button" aria-pressed="true">၈၇</a>
                                                <a href="/Bible/old/Ps/ps88.html" class="btn-g" role="button" aria-pressed="true">၈၈</a>
                                                <a href="/Bible/old/Ps/ps89.html" class="btn-g" role="button" aria-pressed="true">၈၉</a>
                                                <a href="/Bible/old/Ps/ps90.html" class="btn-g" role="button" aria-pressed="true">၉၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps91.html" class="btn-g" role="button" aria-pressed="true">၉၁</a>
                                                <a href="/Bible/old/Ps/ps92.html" class="btn-g" role="button" aria-pressed="true">၉၂</a>
                                                <a href="/Bible/old/Ps/ps93.html" class="btn-g" role="button" aria-pressed="true">၉၃</a>
                                                <a href="/Bible/old/Ps/ps94.html" class="btn-g" role="button" aria-pressed="true">၉၄</a>
                                                <a href="/Bible/old/Ps/ps95.html" class="btn-g" role="button" aria-pressed="true">၉၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps96.html" class="btn-g" role="button" aria-pressed="true">၉၆</a>
                                                <a href="/Bible/old/Ps/ps97.html" class="btn-g" role="button" aria-pressed="true">၉၇</a>
                                                <a href="/Bible/old/Ps/ps98.html" class="btn-g" role="button" aria-pressed="true">၉၈</a>
                                                <a href="/Bible/old/Ps/ps99.html" class="btn-g" role="button" aria-pressed="true">၉၉</a>
                                                <a href="/Bible/old/Ps/ps100.html" class="btn-g" role="button" aria-pressed="true">၁၀၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps101.html" class="btn-g" role="button" aria-pressed="true">၁၀၁</a>
                                                <a href="/Bible/old/Ps/ps102.html" class="btn-g" role="button" aria-pressed="true">၁၀၂</a>
                                                <a href="/Bible/old/Ps/ps103.html" class="btn-g" role="button" aria-pressed="true">၁၀၃</a>
                                                <a href="/Bible/old/Ps/ps104.html" class="btn-g" role="button" aria-pressed="true">၁၀၄</a>
                                                <a href="/Bible/old/Ps/ps105.html" class="btn-g" role="button" aria-pressed="true">၁၀၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps106.html" class="btn-g" role="button" aria-pressed="true">၁၀၆</a>
                                                <a href="/Bible/old/Ps/ps107.html" class="btn-g" role="button" aria-pressed="true">၁၀၇</a>
                                                <a href="/Bible/old/Ps/ps108.html" class="btn-g" role="button" aria-pressed="true">၁၀၈</a>
                                                <a href="/Bible/old/Ps/ps109.html" class="btn-g" role="button" aria-pressed="true">၁၀၉</a>
                                                <a href="/Bible/old/Ps/ps110.html" class="btn-g" role="button" aria-pressed="true">၁၁၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps111.html" class="btn-g" role="button" aria-pressed="true">၁၁၁</a>
                                                <a href="/Bible/old/Ps/ps112.html" class="btn-g" role="button" aria-pressed="true">၁၁၂</a>
                                                <a href="/Bible/old/Ps/ps113.html" class="btn-g" role="button" aria-pressed="true">၁၁၃</a>
                                                <a href="/Bible/old/Ps/ps114.html" class="btn-g" role="button" aria-pressed="true">၁၁၄</a>
                                                <a href="/Bible/old/Ps/ps115.html" class="btn-g" role="button" aria-pressed="true">၁၁၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps116.html" class="btn-g" role="button" aria-pressed="true">၁၁၆</a>
                                                <a href="/Bible/old/Ps/ps117.html" class="btn-g" role="button" aria-pressed="true">၁၁၇</a>
                                                <a href="/Bible/old/Ps/ps118.html" class="btn-g" role="button" aria-pressed="true">၁၁၈</a>
                                                <a href="/Bible/old/Ps/ps119.html" class="btn-g" role="button" aria-pressed="true">၁၁၉</a>
                                                <a href="/Bible/old/Ps/ps120.html" class="btn-g" role="button" aria-pressed="true">၁၂၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps121.html" class="btn-g" role="button" aria-pressed="true">၁၂၁</a>
                                                <a href="/Bible/old/Ps/ps122.html" class="btn-g" role="button" aria-pressed="true">၁၂၂</a>
                                                <a href="/Bible/old/Ps/ps123.html" class="btn-g" role="button" aria-pressed="true">၁၂၃</a>
                                                <a href="/Bible/old/Ps/ps124.html" class="btn-g" role="button" aria-pressed="true">၁၂၄</a>
                                                <a href="/Bible/old/Ps/ps125.html" class="btn-g" role="button" aria-pressed="true">၁၂၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps126.html" class="btn-g" role="button" aria-pressed="true">၁၂၆</a>
                                                <a href="/Bible/old/Ps/ps127.html" class="btn-g" role="button" aria-pressed="true">၁၂၇</a>
                                                <a href="/Bible/old/Ps/ps128.html" class="btn-g" role="button" aria-pressed="true">၁၂၈</a>
                                                <a href="/Bible/old/Ps/ps129.html" class="btn-g" role="button" aria-pressed="true">၁၂၉</a>
                                                <a href="/Bible/old/Ps/ps130.html" class="btn-g" role="button" aria-pressed="true">၁၃၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps131.html" class="btn-g" role="button" aria-pressed="true">၁၃၁</a>
                                                <a href="/Bible/old/Ps/ps132.html" class="btn-g" role="button" aria-pressed="true">၁၃၂</a>
                                                <a href="/Bible/old/Ps/ps133.html" class="btn-g" role="button" aria-pressed="true">၁၃၃</a>
                                                <a href="/Bible/old/Ps/ps134.html" class="btn-g" role="button" aria-pressed="true">၁၃၄</a>
                                                <a href="/Bible/old/Ps/ps135.html" class="btn-g" role="button" aria-pressed="true">၁၃၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps136.html" class="btn-g" role="button" aria-pressed="true">၁၃၆</a>
                                                <a href="/Bible/old/Ps/ps137.html" class="btn-g" role="button" aria-pressed="true">၁၃၇</a>
                                                <a href="/Bible/old/Ps/ps138.html" class="btn-g" role="button" aria-pressed="true">၁၃၈</a>
                                                <a href="/Bible/old/Ps/ps139.html" class="btn-g" role="button" aria-pressed="true">၁၃၉</a>
                                                <a href="/Bible/old/Ps/ps140.html" class="btn-g" role="button" aria-pressed="true">၁၄၀</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps141.html" class="btn-g" role="button" aria-pressed="true">၁၄၁</a>
                                                <a href="/Bible/old/Ps/ps142.html" class="btn-g" role="button" aria-pressed="true">၁၄၂</a>
                                                <a href="/Bible/old/Ps/ps143.html" class="btn-g" role="button" aria-pressed="true">၁၄၃</a>
                                                <a href="/Bible/old/Ps/ps144.html" class="btn-g" role="button" aria-pressed="true">၁၄၄</a>
                                                <a href="/Bible/old/Ps/ps145.html" class="btn-g" role="button" aria-pressed="true">၁၄၅</a>
                                              </div>
                                              <div class="btn-group" role="group" aria-label="First group">
                                                <a href="/Bible/old/Ps/ps146.html" class="btn-g" role="button" aria-pressed="true">၁၄၆</a>
                                                <a href="/Bible/old/Ps/ps147.html" class="btn-g" role="button" aria-pressed="true">၁၄၇</a>
                                                <a href="/Bible/old/Ps/ps148.html" class="btn-g" role="button" aria-pressed="true">၁၄၈</a>
                                                <a href="/Bible/old/Ps/ps149.html" class="btn-g" role="button" aria-pressed="true">၁၄၉</a>
                                                <a href="/Bible/old/Ps/ps150.html" class="btn-g" role="button" aria-pressed="true">၁၅၀</a>
                                              </div>
                                            </div> 
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-Proverbs" role="tabpanel" aria-labelledby="list-Proverbs-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Prov/Pro2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Prov/Pro3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Prov/Pro4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Prov/Pro5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Prov/Pro6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Prov/Pro7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Prov/Pro8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Prov/Pro9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Prov/Pro10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Prov/Pro11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Prov/Pro12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Prov/Pro13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Prov/Pro14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Prov/Pro15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g active" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Prov/Pro1.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          
                                        </div>
                                    </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Ecclesiastes" role="tabpanel" aria-labelledby="list-Ecclesiastes-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ecc/ecc1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Ecc/ecc2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Ecc/ecc3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Ecc/ecc4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Ecc/ecc5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ecc/ecc6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Ecc/ecc7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Ecc/ecc8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Ecc/ecc9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Ecc/ecc10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Ecc/ecc11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Ecc/ecc12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Song-of-Songs" role="tabpanel" aria-labelledby="list-Song-of-Songs-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Sog/sog1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Sog/sog2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Sog/sog3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Sog/sog4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Sog/sog5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Sog/sog6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Sog/sog7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Sog/sog8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Isaiah" role="tabpanel" aria-labelledby="list-Isaiah-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Isa/isa2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Isa/isa3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Isa/isa4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Isa/isa5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Isa/isa7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Isa/isa8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Isa/isa9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Isa/isa10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Isa/isa12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Isa/isa13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Isa/isa14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Isa/isa15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Isa/isa17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Isa/isa18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Isa/isa19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Isa/isa20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/Isa/isa22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/Isa/isa23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/Isa/isa24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/Isa/isa25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/Isa/isa27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/Isa/isa28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/Isa/isa29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/Isa/isa30.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa31.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          <a href="/Bible/old/Isa/isa32.html" class="btn-g" role="button" aria-pressed="true">၃၂</a>
                                          <a href="/Bible/old/Isa/isa33.html" class="btn-g" role="button" aria-pressed="true">၃၃</a>
                                          <a href="/Bible/old/Isa/isa34.html" class="btn-g" role="button" aria-pressed="true">၃၄</a>
                                          <a href="/Bible/old/Isa/isa35.html" class="btn-g" role="button" aria-pressed="true">၃၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa36.html" class="btn-g" role="button" aria-pressed="true">၃၆</a>
                                          <a href="/Bible/old/Isa/isa37.html" class="btn-g" role="button" aria-pressed="true">၃၇</a>
                                          <a href="/Bible/old/Isa/isa38.html" class="btn-g" role="button" aria-pressed="true">၃၈</a>
                                          <a href="/Bible/old/Isa/isa39.html" class="btn-g" role="button" aria-pressed="true">၃၉</a>
                                          <a href="/Bible/old/Isa/isa40.html" class="btn-g" role="button" aria-pressed="true">၄၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa41.html" class="btn-g" role="button" aria-pressed="true">၄၁</a>
                                          <a href="/Bible/old/Isa/isa42.html" class="btn-g" role="button" aria-pressed="true">၄၂</a>
                                          <a href="/Bible/old/Isa/isa43.html" class="btn-g" role="button" aria-pressed="true">၄၃</a>
                                          <a href="/Bible/old/Isa/isa44.html" class="btn-g" role="button" aria-pressed="true">၄၄</a>
                                          <a href="/Bible/old/Isa/isa45.html" class="btn-g" role="button" aria-pressed="true">၄၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa46.html" class="btn-g" role="button" aria-pressed="true">၄၆</a>
                                          <a href="/Bible/old/Isa/isa47.html" class="btn-g" role="button" aria-pressed="true">၄၇</a>
                                          <a href="/Bible/old/Isa/isa48.html" class="btn-g" role="button" aria-pressed="true">၄၈</a>
                                          <a href="/Bible/old/Isa/isa49.html" class="btn-g" role="button" aria-pressed="true">၄၉</a>
                                          <a href="/Bible/old/Isa/isa50.html" class="btn-g" role="button" aria-pressed="true">၅၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa51.html" class="btn-g" role="button" aria-pressed="true">၅၁</a>
                                          <a href="/Bible/old/Isa/isa52.html" class="btn-g" role="button" aria-pressed="true">၅၂</a>
                                          <a href="/Bible/old/Isa/isa53.html" class="btn-g" role="button" aria-pressed="true">၅၃</a>
                                          <a href="/Bible/old/Isa/isa54.html" class="btn-g" role="button" aria-pressed="true">၅၄</a>
                                          <a href="/Bible/old/Isa/isa55.html" class="btn-g" role="button" aria-pressed="true">၅၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa56.html" class="btn-g" role="button" aria-pressed="true">၅၆</a>
                                          <a href="/Bible/old/Isa/isa57.html" class="btn-g" role="button" aria-pressed="true">၅၇</a>
                                          <a href="/Bible/old/Isa/isa58.html" class="btn-g" role="button" aria-pressed="true">၅၈</a>
                                          <a href="/Bible/old/Isa/isa59.html" class="btn-g" role="button" aria-pressed="true">၅၉</a>
                                          <a href="/Bible/old/Isa/isa60.html" class="btn-g" role="button" aria-pressed="true">၆၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa61.html" class="btn-g" role="button" aria-pressed="true">၆၁</a>
                                          <a href="/Bible/old/Isa/isa62.html" class="btn-g" role="button" aria-pressed="true">၆၂</a>
                                          <a href="/Bible/old/Isa/isa63.html" class="btn-g" role="button" aria-pressed="true">၆၃</a>
                                          <a href="/Bible/old/Isa/isa64.html" class="btn-g" role="button" aria-pressed="true">၆၄</a>
                                          <a href="/Bible/old/Isa/isa65.html" class="btn-g" role="button" aria-pressed="true">၆၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Isa/isa66.html" class="btn-g" role="button" aria-pressed="true">၆၆</a>
                                        </div>  
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Jeremiah" role="tabpanel" aria-labelledby="list-Jeremiah-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Jer/jer2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Jer/jer3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Jer/jer4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Jer/jer5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Jer/jer7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Jer/jer8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Jer/jer9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Jer/jer10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Jer/jer12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Jer/jer13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Jer/jer14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Jer/jer15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Jer/jer17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Jer/jer18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Jer/jer19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Jer/jer20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/Jer/jer22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/Jer/jer23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/Jer/jer24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/Jer/jer25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/Jer/jer27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/Jer/jer28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/Jer/jer29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/Jer/jer30.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer31.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          <a href="/Bible/old/Jer/jer32.html" class="btn-g" role="button" aria-pressed="true">၃၂</a>
                                          <a href="/Bible/old/Jer/jer33.html" class="btn-g" role="button" aria-pressed="true">၃၃</a>
                                          <a href="/Bible/old/Jer/jer34.html" class="btn-g" role="button" aria-pressed="true">၃၄</a>
                                          <a href="/Bible/old/Jer/jer35.html" class="btn-g" role="button" aria-pressed="true">၃၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer36.html" class="btn-g" role="button" aria-pressed="true">၃၆</a>
                                          <a href="/Bible/old/Jer/jer37.html" class="btn-g" role="button" aria-pressed="true">၃၇</a>
                                          <a href="/Bible/old/Jer/jer38.html" class="btn-g" role="button" aria-pressed="true">၃၈</a>
                                          <a href="/Bible/old/Jer/jer39.html" class="btn-g" role="button" aria-pressed="true">၃၉</a>
                                          <a href="/Bible/old/Jer/jer40.html" class="btn-g" role="button" aria-pressed="true">၄၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer41.html" class="btn-g" role="button" aria-pressed="true">၄၁</a>
                                          <a href="/Bible/old/Jer/jer42.html" class="btn-g" role="button" aria-pressed="true">၄၂</a>
                                          <a href="/Bible/old/Jer/jer43.html" class="btn-g" role="button" aria-pressed="true">၄၃</a>
                                          <a href="/Bible/old/Jer/jer44.html" class="btn-g" role="button" aria-pressed="true">၄၄</a>
                                          <a href="/Bible/old/Jer/jer45.html" class="btn-g" role="button" aria-pressed="true">၄၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer46.html" class="btn-g" role="button" aria-pressed="true">၄၆</a>
                                          <a href="/Bible/old/Jer/jer47.html" class="btn-g" role="button" aria-pressed="true">၄၇</a>
                                          <a href="/Bible/old/Jer/jer48.html" class="btn-g" role="button" aria-pressed="true">၄၈</a>
                                          <a href="/Bible/old/Jer/jer49.html" class="btn-g" role="button" aria-pressed="true">၄၉</a>
                                          <a href="/Bible/old/Jer/jer50.html" class="btn-g" role="button" aria-pressed="true">၅၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jer/jer51.html" class="btn-g" role="button" aria-pressed="true">၅၁</a>
                                          <a href="/Bible/old/Jer/jer52.html" class="btn-g" role="button" aria-pressed="true">၅၂</a>
                                        </div>  
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Lamentations" role="tabpanel" aria-labelledby="list-Lamentations-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Lam/lam1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Lam/lam2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Lam/lam3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Lam/lam4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Lam/lam5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Ezekiel" role="tabpanel" aria-labelledby="list-Ezekiel-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Eze/eze1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Eze/eze2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Eze/eze3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Eze/eze4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Eze/eze5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Eze/eze6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Eze/eze7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Eze/eze8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Eze/eze9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Eze/eze10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Eze/eze11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Eze/eze12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Eze/eze13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Eze/eze14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/old/Eze/eze15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Eze/eze16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/old/Eze/eze17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/old/Eze/eze18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/old/Eze/eze19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/old/Eze/eze20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Eze/eze21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/old/Eze/eze22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="/Bible/old/Eze/eze23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="/Bible/old/Eze/eze24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="/Bible/old/Eze/eze25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Eze/eze26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="/Bible/old/Eze/eze27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="/Bible/old/Eze/eze28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                          <a href="/Bible/old/Eze/eze29.html" class="btn-g" role="button" aria-pressed="true">၂၉</a>
                                          <a href="/Bible/old/Eze/eze30.html" class="btn-g" role="button" aria-pressed="true">၃၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Eze/eze31.html" class="btn-g" role="button" aria-pressed="true">၃၁</a>
                                          <a href="/Bible/old/Eze/eze32.html" class="btn-g" role="button" aria-pressed="true">၃၂</a>
                                          <a href="/Bible/old/Eze/eze33.html" class="btn-g" role="button" aria-pressed="true">၃၃</a>
                                          <a href="/Bible/old/Eze/eze34.html" class="btn-g" role="button" aria-pressed="true">၃၄</a>
                                          <a href="/Bible/old/Eze/eze35.html" class="btn-g" role="button" aria-pressed="true">၃၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Eze/eze36.html" class="btn-g" role="button" aria-pressed="true">၃၆</a>
                                          <a href="/Bible/old/Eze/eze37.html" class="btn-g" role="button" aria-pressed="true">၃၇</a>
                                          <a href="/Bible/old/Eze/eze38.html" class="btn-g" role="button" aria-pressed="true">၃၈</a>
                                          <a href="/Bible/old/Eze/eze39.html" class="btn-g" role="button" aria-pressed="true">၃၉</a>
                                          <a href="/Bible/old/Eze/eze40.html" class="btn-g" role="button" aria-pressed="true">၄၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Eze/eze41.html" class="btn-g" role="button" aria-pressed="true">၄၁</a>
                                          <a href="/Bible/old/Eze/eze42.html" class="btn-g" role="button" aria-pressed="true">၄၂</a>
                                          <a href="/Bible/old/Eze/eze43.html" class="btn-g" role="button" aria-pressed="true">၄၃</a>
                                          <a href="/Bible/old/Eze/eze44.html" class="btn-g" role="button" aria-pressed="true">၄၄</a>
                                          <a href="/Bible/old/Eze/eze45.html" class="btn-g" role="button" aria-pressed="true">၄၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Eze/eze46.html" class="btn-g" role="button" aria-pressed="true">၄၆</a>
                                          <a href="/Bible/old/Eze/eze47.html" class="btn-g" role="button" aria-pressed="true">၄၇</a>
                                          <a href="/Bible/old/Eze/eze48.html" class="btn-g" role="button" aria-pressed="true">၄၈</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Daniel" role="tabpanel" aria-labelledby="list-Daniel-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Dan/dan1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Dan/dan2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Dan/dan3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Dan/dan4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Dan/dan5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Dan/dan6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Dan/dan7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Dan/dan8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Dan/dan9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Dan/dan10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Dan/dan11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Dan/dan12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Hosea" role="tabpanel" aria-labelledby="list-Hosea-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Hos/hos1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Hos/hos2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Hos/hos3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Hos/hos4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Hos/hos5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Hos/hos6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Hos/hos7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Hos/hos8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Hos/hos9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Hos/hos10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Hos/hos11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Hos/hos12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Hos/hos13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Hos/hos14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Joel" role="tabpanel" aria-labelledby="list-Joel-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Joe/joe1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Joe/joe2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Joe/joe3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Amos" role="tabpanel" aria-labelledby="list-Amos-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Amo/amo1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Amo/amo2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Amo/amo3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Amo/amo4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Amo/amo5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Amo/amo6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Amo/amo7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Amo/amo8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Amo/amo9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Obadiah" role="tabpanel" aria-labelledby="list-Obadiah-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Oba/oba1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Jonah" role="tabpanel" aria-labelledby="list-Jonah-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Jon/jon1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Jon/jon2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Jon/jon3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Jon/jon4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Micah" role="tabpanel" aria-labelledby="list-Micah-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Mic/mic1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Mic/mic2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Mic/mic3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Mic/mic4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Mic/mic5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Mic/mic6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Mic/mic7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Nahum" role="tabpanel" aria-labelledby="list-Nahum-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Nah/nah1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Nah/nah2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Nah/nah3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Habakkuk" role="tabpanel" aria-labelledby="list-Habakkuk-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Hab/hab1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Hab/hab2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Hab/hab3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Zephaniah" role="tabpanel" aria-labelledby="list-Zephaniah-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Zep/zep1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Zep/zep2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Zep/zep3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Haggai" role="tabpanel" aria-labelledby="list-Haggai-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Hag/hag1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Hag/hag2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Zechariah" role="tabpanel" aria-labelledby="list-Zechariah-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Zec/zec1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Zec/zec2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Zec/zec3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Zec/zec4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/old/Zec/zec5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Zec/zec6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/old/Zec/zec7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/old/Zec/zec8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/old/Zec/zec9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/old/Zec/zec10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Zec/zec11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/old/Zec/zec12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/old/Zec/zec13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/old/Zec/zec14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Malachi" role="tabpanel" aria-labelledby="list-Malachi-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/old/Mal/Mal1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/old/Mal/Mal2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/old/Mal/Mal3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/old/Mal/Mal4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        </div>
                                      </div>  
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal2">
                      ဓမ္မသစ်ကျမ်း
                    </button>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> ဓမ္မသစ်ကျမ်း</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="modal-dialog-scrollable">
                                      <div class="modal-content">
                                        <div class="modal-body">
                                          <div class="list-group list-group-flush" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action active" id="list-Matthew-list" data-toggle="list" href="#list-Matthew" role="tab" aria-controls="Matthew">ရှင်မဿဲခရစ်ဝင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-Mark-list" data-toggle="list" href="#list-Mark" role="tab" aria-controls="Mark">ရှင်မာကုခရစ်ဝင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-Luke-list" data-toggle="list" href="#list-Luke" role="tab" aria-controls="Luke">ရှင်လုကာခရစ်ဝင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-John-list" data-toggle="list" href="#list-John" role="tab" aria-controls="John">ရှင်ယောဟန်ခရစ်ဝင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-Acts-list" data-toggle="list" href="#list-Acts" role="tab" aria-controls="Acts">တမန်တော်ဝတ္ထု</a>
                                            <a class="list-group-item list-group-item-action" id="list-Romans-list" data-toggle="list" href="#list-Romans" role="tab" aria-controls="Romans">ရောမဩဝါဒစာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-1Corinthians-list" data-toggle="list" href="#list-1Corinthians" role="tab" aria-controls="1Corinthians">ကောရိန္သုဩဝါဒစာပဌမစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-2Corinthians-list" data-toggle="list" href="#list-2Corinthians" role="tab" aria-controls="2Corinthians">ကောရိန္သုဩဝါဒစာဒုတိယစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-Galatians-list" data-toggle="list" href="#list-Galatians" role="tab" aria-controls="Galatians">ဂလာတိဩဝါဒစာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-Ephesians-list" data-toggle="list" href="#list-Ephesians" role="tab" aria-controls="Ephesians">ဧဖက်ဩဝါဒစာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-Philippians-list" data-toggle="list" href="#list-Philippians" role="tab" aria-controls="Philippians">ဖိလိပ္ပိဩဝါဒစာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-Colossians-list" data-toggle="list" href="#list-Colossians" role="tab" aria-controls="Colossians">ကောလောသဲဩဝါဒစာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-1Thessalonians-list" data-toggle="list" href="#list-1Thessalonians" role="tab" aria-controls="1Thessalonians">သက်သာလောနိတ်ဩဝါဒစာပဌမစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-2Thessalonians-list" data-toggle="list" href="#list-2Thessalonians" role="tab" aria-controls="2Thessalonians">သက်သာလောနိတ်ဩဝါဒစာဒုတိယစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-1Timothy-list" data-toggle="list" href="#list-1Timothy" role="tab" aria-controls="1Timothy">တိမောသေဩဝါဒစာပဌမစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-2Timothy-list" data-toggle="list" href="#list-2Timothy" role="tab" aria-controls="2Timothy">တိမောသေဩဝါဒစာဒုတိယစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-Titus-list" data-toggle="list" href="#list-Titus" role="tab" aria-controls="Titus">တိတုဩဝါဒစာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-Philemon-list" data-toggle="list" href="#list-Philemon" role="tab" aria-controls="Philemon">ဖိလေမုန်ဩဝါဒစာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-Hebrews-list" data-toggle="list" href="#list-Hebrews" role="tab" aria-controls="Hebrews">ဟေဗြဲဩဝါဒစာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-James-list" data-toggle="list" href="#list-James" role="tab" aria-controls="James">ရှင်ယာကုပ်ဩဝါဒစာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-1Peter-list" data-toggle="list" href="#list-1Peter" role="tab" aria-controls="1Peter">ရှင်ပေတရုဩဝါဒစာပဌမစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-2Peter-list" data-toggle="list" href="#list-2Peter" role="tab" aria-controls="2Peter">ရှင်ပေတရုဩဝါဒစာဒုတိယစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-1John-list" data-toggle="list" href="#list-1John" role="tab" aria-controls="1John">ရှင်ယောဟန်ဩဝါဒစာပဌမစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-2John-list" data-toggle="list" href="#list-2John" role="tab" aria-controls="2John">ရှင်ယောဟန်ဩဝါဒစာဒုတိယစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-3John-list" data-toggle="list" href="#list-3John" role="tab" aria-controls="3John">ရှင်ယောဟန်ဩဝါဒစာတတိယစောင်</a>
                                            <a class="list-group-item list-group-item-action" id="list-Jude-list" data-toggle="list" href="#list-Jude" role="tab" aria-controls="Jude">ရှင်ယုဒဩဝါဒစာ</a>
                                            <a class="list-group-item list-group-item-action" id="list-Revelation-list" data-toggle="list" href="#list-Revelation" role="tab" aria-controls="Revelation">ဗျာဒိတ်ကျမ်း</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ml-auto">
                                  <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-Matthew" role="tabpanel" aria-labelledby="list-Matthew-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="{{route('mat1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="{{route('mat2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="{{route('mat3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="{{route('mat4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="{{route('mat5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="{{route('mat6')}}" class="btn-g" role="button" aria-pressed="true">၆</a>
                                        <a href="{{route('mat7')}}" class="btn-g" role="button" aria-pressed="true">၇</a>
                                        <a href="{{route('mat8')}}" class="btn-g" role="button" aria-pressed="true">၈</a>
                                        <a href="{{route('mat9')}}" class="btn-g" role="button" aria-pressed="true">၉</a>
                                        <a href="{{route('mat10')}}" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="{{route('mat11')}}" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                        <a href="{{route('mat12')}}" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                        <a href="{{route('mat13')}}" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                        <a href="{{route('mat14')}}" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                        <a href="{{route('mat15')}}" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="{{route('mat16')}}" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                        <a href="{{route('mat17')}}" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                        <a href="{{route('mat18')}}" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                        <a href="{{route('mat19')}}" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                        <a href="{{route('mat20')}}" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="{{route('mat21')}}" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                        <a href="{{route('mat22')}}" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                        <a href="{{route('mat23')}}" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                        <a href="{{route('mat24')}}" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                        <a href="{{route('mat25')}}" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="{{route('mat26')}}" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                        <a href="{{route('mat27')}}" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                        <a href="{{route('mat28')}}" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-Mark" role="tabpanel" aria-labelledby="list-Mark-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('mark1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('mark2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('mark3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('mark4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('mark5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('mark6')}}" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="{{route('mark7')}}" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="{{route('mark8')}}" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="{{route('mark9')}}" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="{{route('mark10')}}" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('mark11')}}" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="{{route('mark12')}}" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="{{route('mark13')}}" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="{{route('mark14')}}" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="{{route('mark16')}}" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('mark16')}}" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-Luke" role="tabpanel" aria-labelledby="list-Luke-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('luke1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('luke2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('luke3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('luke4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('luke5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('luke6')}}" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="{{route('luke7')}}" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="{{route('luke8')}}" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="{{route('luke9')}}" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="{{route('luke10')}}" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('luke11')}}" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="{{route('luke12')}}" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="{{route('luke13')}}" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="{{route('luke14')}}" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="{{route('luke15')}}" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('luke16')}}" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="{{route('luke17')}}" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="{{route('luke18')}}" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="{{route('luke19')}}" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="{{route('luke20')}}" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('luke21')}}" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="{{route('luke22')}}" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="{{route('luke23')}}" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="{{route('luke24')}}" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-John" role="tabpanel" aria-labelledby="list-John-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('john1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('john2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('john3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('john4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('john5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('john6')}}" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="{{route('john7')}}" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="{{route('john8')}}" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="{{route('john9')}}" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="{{route('john10')}}" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('john11')}}" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="{{route('john12')}}" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="{{route('john13')}}" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="{{route('john14')}}" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="{{route('john15')}}" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('john16')}}" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="{{route('john17')}}" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="{{route('john18')}}" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="{{route('john19')}}" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="{{route('john20')}}" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('john21')}}" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Acts" role="tabpanel" aria-labelledby="list-Acts-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('acts1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('acts2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('acts3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('acts4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('acts5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('acts6')}}" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="{{route('acts7')}}" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="{{route('acts8')}}" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="{{route('acts9')}}" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="{{route('acts10')}}" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('acts11')}}" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="{{route('acts12')}}" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="{{route('acts13')}}" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="{{route('acts14')}}" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="{{route('acts15')}}" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('acts16')}}" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="{{route('acts17')}}" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="{{route('acts18')}}" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="{{route('acts19')}}" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="{{route('acts20')}}" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('acts21')}}" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="{{route('acts22')}}" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                          <a href="{{route('acts23')}}" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                          <a href="{{route('acts24')}}" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                          <a href="{{route('acts25')}}" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('acts26')}}" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                          <a href="{{route('acts27')}}" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                          <a href="{{route('acts28')}}" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Romans" role="tabpanel" aria-labelledby="list-Romans-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/Rom/Rom1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/new/Rom/Rom2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/new/Rom/Rom3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/new/Rom/Rom4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/new/Rom/Rom5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/Rom/Rom6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/new/Rom/Rom7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/new/Rom/Rom8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/new/Rom/Rom9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/new/Rom/Rom10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/Rom/Rom11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/new/Rom/Rom12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/new/Rom/Rom13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/new/Rom/Rom14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/new/Rom/Rom15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/Rom/Rom16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-1Corinthians" role="tabpanel" aria-labelledby="list-1Corinthians-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/1Cor/1Cor1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/new/1Cor/1Cor2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/new/1Cor/1Cor3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/new/1Cor/1Cor4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/new/1Cor/1Cor5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/1Cor/1Cor6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/new/1Cor/1Cor7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/new/1Cor/1Cor8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/new/1Cor/1Cor9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/new/1Cor/1Cor10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/1Cor/1Cor11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/new/1Cor/1Cor12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/new/1Cor/1Cor13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/new/1Cor/1Cor14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/new/1Cor/1Cor5.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/1Cor/1Cor16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-2Corinthians" role="tabpanel" aria-labelledby="list-2Corinthians-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('2cor1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('2cor2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('2cor3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('2cor4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('2cor5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('2cor6')}}" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="{{route('2cor7')}}" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="{{route('2cor8')}}" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="{{route('2cor9')}}" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="{{route('2cor10')}}" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('2cor11')}}" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="{{route('2cor12')}}" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="{{route('2cor13')}}" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Galatians" role="tabpanel" aria-labelledby="list-Galatians-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('gal1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('gal2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('gal3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('gal4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('gal5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('gal6')}}" class="btn-g" role="button" aria-pressed="true">၆</a>
                                        </div>
                                      </div>  
                                    </div> 
                                    <div class="tab-pane fade" id="list-Ephesians" role="tabpanel" aria-labelledby="list-Ephesians-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('eph1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('eph2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('eph3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('eph4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('eph5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('eph6')}}" class="btn-g" role="button" aria-pressed="true">၆</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Philippians" role="tabpanel" aria-labelledby="list-Philippians-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                          <div class="btn-group" role="group" aria-label="First group">
                                            <a href="{{route('php1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                            <a href="{{route('php2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                            <a href="{{route('php3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                            <a href="{{route('php4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-Colossians" role="tabpanel" aria-labelledby="list-Colossians-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('col1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('col2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('col3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('col4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        </div>
                                    </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-1Thessalonians" role="tabpanel" aria-labelledby="list-1Thessalonians-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('1The1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('1The2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('1The3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('1The4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('1The5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                    </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-2Thessalonians" role="tabpanel" aria-labelledby="list-2Thessalonians-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('2The1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('2The2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('2The3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-1Timothy" role="tabpanel" aria-labelledby="list-1Timothy-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('1Tim1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('1Tim2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('1Tim3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('1Tim4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('1Tim5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('1Tim6')}}" class="btn-g" role="button" aria-pressed="true">၆</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-2Timothy" role="tabpanel" aria-labelledby="list-2Timothy-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('2Tim1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('2Tim2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('2Tim3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('2Tim4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Titus" role="tabpanel" aria-labelledby="list-Titus-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                          <div class="btn-group" role="group" aria-label="First group">
                                            <a href="{{route('tit1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                            <a href="{{route('tit2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                            <a href="{{route('tit3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          </div>
                                        </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Philemon" role="tabpanel" aria-labelledby="list-Philemon-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('Phm1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Hebrews" role="tabpanel" aria-labelledby="list-Hebrews-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('heb1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('heb2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('heb3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('heb4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('heb5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('heb6')}}" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="{{route('heb7')}}" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="{{route('heb8')}}" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="{{route('heb9')}}" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="{{route('heb10')}}" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('heb11')}}" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="{{route('heb12')}}" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="{{route('heb13')}}" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                        </div>
                                    </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-James" role="tabpanel" aria-labelledby="list-James-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('Jam1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('Jam2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('Jam3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('Jam4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('Jam5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="list-1Peter" role="tabpanel" aria-labelledby="list-1Peter-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('1Pet1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('1Pet2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('1Pet3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('1Pet4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('1Pet5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-2Peter" role="tabpanel" aria-labelledby="list-2Peter-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('2Pet1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('2Pet2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('2Pet3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        </div>  
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-1John" role="tabpanel" aria-labelledby="list-1John-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('1Joh1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="{{route('1Joh2')}}" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="{{route('1Joh3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="{{route('1Joh4')}}" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="{{route('1Joh5')}}" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-2John" role="tabpanel" aria-labelledby="list-2John-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('2Joh1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-3John" role="tabpanel" aria-labelledby="list-3John-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('3Joh1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Jude" role="tabpanel" aria-labelledby="list-Jude-list">
                                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="{{route('Jud1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="tab-pane fade" id="list-Revelation" role="tabpanel" aria-labelledby="list-Revelation-list">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/Rev/Rev1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                          <a href="/Bible/new/Rev/Rev2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                          <a href="/Bible/new/Rev/Rev3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                          <a href="/Bible/new/Rev/Rev4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                          <a href="/Bible/new/Rev/Rev5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/Rev/Rev6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                          <a href="/Bible/new/Rev/Rev7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                          <a href="/Bible/new/Rev/Rev8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                          <a href="/Bible/new/Rev/Rev9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                          <a href="/Bible/new/Rev/Rev10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/Rev/Rev11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                          <a href="/Bible/new/Rev/Rev12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                          <a href="/Bible/new/Rev/Rev13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                          <a href="/Bible/new/Rev/Rev14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                          <a href="/Bible/new/Rev/Rev15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/Rev/Rev16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                          <a href="/Bible/new/Rev/Rev17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                          <a href="/Bible/new/Rev/Rev18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                          <a href="/Bible/new/Rev/Rev19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                          <a href="/Bible/new/Rev/Rev20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="First group">
                                          <a href="/Bible/new/Rev/Rev21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                          <a href="/Bible/new/Rev/Rev22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                        </div>
                                      </div>  
                                    </div> 
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
          </div><hr>

<!-- footer -->
      <footer class="page-footer font-small special-color-dark pt-4">
        <div class="container">
          <div class="row">
            <!-- Image logo -->
            <div class="col col-lg-2">
              <img src="{{asset('Image/loyallogo3.png')}}" width="100px" height="100px" alt="">
            </div>
            <!-- Social button -->
            <div class="col">
              <h5 class="font-weight-bold text-uppercase mt-3 mb-2">Content</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Bible</a>
                  </li>
                  <li>
                    <a href="#!">Bible Study</a>
                  </li>
                  <li>
                    <a href="#!">Book</a>
                  </li>
                  <li>
                    <a href="#!">Prayer</a>
                  </li>
                </ul>
            </div>
            <div class="col">
              <h5 class="font-weight-bold text-uppercase mt-3 mb-2">About</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Our Vision</a>
                </li>
                <li>
                  <a href="#!">Our Mission</a>
                </li>
                <li>
                  <a href="#!">Contact</a>
                </li>
                <li>
                  <a href="#!">About</a>
                </li>
              </ul>
           </div>
            <!-- Form -->
            <div class="col-6 col-md-auto list-social" >
              <form class="input-group" action="{{route('usermail')}}" method="post">
                @csrf
                <input type="text" class="form-control form-control-sm mr-2" placeholder="Your name"
                  aria-label="Your name" aria-describedby="basic-addon2" name="userName">
                <input type="email" class="form-control form-control-sm" placeholder="Your email"
                  aria-label="Your email" aria-describedby="basic-addon2" name="userEmail">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-outline-white my-0" type="submit">Subscribe</button>
                </div>
              </form>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
              @endif
                  @error("userName")
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                  @error("userEmail")
                      <p class="text-danger">{{$message}}</p>
                  @enderror
              <!-- Social -->
        <ul class="list-unstyled list-inline text-center mt-5">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-3" href="https://www.facebook.com/loyalland91/" target="_back">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-3">
              <i class="fab fa-twitter"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-3" >
              <i class="fab fa-linkedin-in"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-3" href="https://www.youtube.com/channel/UCQqEREbXJChXr4HV2AW-4-g?view_as=subscriber" target="_back">
            <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-3" href="https://www.instagram.com/loyalland91/" target="_back">
            <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
          </div>
          </div>
        </div>
        <!-- copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href=""> loyalland.org</a>
        </div>
      </footer>

    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script type="text/javascript" src="study.js"></script>
</body>
</html>