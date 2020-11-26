@extends("Layout.Layout")
@section("content")

    <div class="main-bible" id="biblemanu">
          <div class="container">
              <div class="row" >
                <div class="col bible-title">
                    <h2 class="wow animate__animated animate__flipInX">သမ္မာကျမ်းစာ</h2>
                        <p>ဟေဗြဲ၊ဟေလသပါဠိတော်မှ၊မြန်မာဘာသာအားဖြင့်၊ဆရာယုဒသန်အနက်ပြန်သောဓမ္မဟောင်းကျမ်းနှင့်ဓမ္မသစ်ကျမ်း</p>
                  </div>
              </div>
              <hr>
            <div class="row justify-content-center" >
                <div class="col-md-6 bi-mu">
                    <h3>ဓမ္မဟောင်းကျမ်း</h3>
                    <a href="#Old-Test"><button>ဖတ်ရန်နိုပ်ပါ</button></a>
                </div>
                <div class="col-md-6 bi-mu">
                    <h3>ဓမ္မသစ်ကျမ်း</h3>
                    <a href="#New-Test"><button>ဖတ်ရန်နိုပ်ပါ</button></a>
            </div>
          </div>
          </div>
      </div>
      <div class="content-bible">
          <div class="container">         
              <div class="row justify-content-center" id="Old-Test">
                  <div class="bi-ti">
                    <div class="col-md-12">
                        <div class="bible-menu1">
                          <h4 class="wow animate__animated animate__lightSpeedInLeft animate__delay-0.8s">ဓမ္မဟောင်းကျမ်း</h4>
                          <ul class="list-group list-group-horizontal-md" >
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Genesis">ကမ္ဘာဦးကျမ်း</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Exodus">ထွက်မြောက်ရာကျမ်း</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Leviticus">ဝတ်ပြုရာကျမ်း</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Numbers">တောလည်ရာကျမ်း</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Deuteronomy">တရားဟောရာကျမ်း</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-md">
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Joshua">ယောရှုမှတ်စာ</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Judges">တရားသူကြီးမှတ်စာ</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Ruth">ရုသဝတ္ထု</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Samuel1">ဓမ္မရာဇဝင်ပဌမစောင်</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Samuel2">ဓမ္မရာဇဝင်ဒုတိယစောင်</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-md">
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Kings1">ဓမ္မရာဇဝင်တတိယစောင်</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Kings2">ဓမ္မရာဇဝင်စတုတ္ထစောင်</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Chronicles1">ရာဇဝင်ချုပ်ပဌမစောင်</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Chronicles2">ရာဇဝင်ချုပ်ဒုတိယစောင်</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Ezra">ဧဇရမှတ်စာ</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-md">
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Nehemiah">နေဟမိမှတ်စာ</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Esther">ဧသတာဝတ္ထု။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Job">ယောဘဝတ္ထု။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Psalms">ဆာလံကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Proverbs">သုတ္တံကျမ်း။</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-md">
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Ecclesiastes">ဒေသနာကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Song-of-Songs">ရှောလမုန်သီချင်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Isaiah">ဟေရှာယအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Jeremiah">ယေရမိအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Lamentations">ယေရမိမြည်တမ်းစကား။</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-md">
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Ezekiel">ယေဇကျေလအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Daniel">ဒံယေလအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Hosea">ဟောရှေအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Joel">ယောလအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Amos">အာမုတ်အနာဂတ္တိကျမ်း။</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-md">
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Obadiah">ဩဗဒိအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Jonah">ယောနဝတ္ထု။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Micah">မိက္ခာအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Nahum">နာဟုံအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Habakkuk">ဟဗက္ကုတ်အနာဂတ္တိကျမ်း။</li>
                          </ul>
                          <ul class="list-group list-group-horizontal-md">
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Zephaniah">ဇေဖနိအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Haggai">ဟဂ္ဂဲအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Zechariah">ဇာခရိအနာဂတ္တိကျမ်း။</li>
                            <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Malachi">မာလခိအနာဂတ္တိကျမ်း။</li>
                          </ul>
                        </div>
                        <div class="">
                          <div class="modal fade" id="Genesis" tabindex="-1" aria-labelledby="GenesisLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="exampleModalLabel">ကမ္ဘာဦးကျမ်း</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Exodus" tabindex="-1" aria-labelledby="ExodusLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="exampleModalLabel">ထွက်မြောက်ရာကျမ်း</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Leviticus" tabindex="-1" aria-labelledby="LeviticusLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="exampleModalLabel">ဝတ်ပြုရာကျမ်း</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Numbers" tabindex="-1" aria-labelledby="NumbersLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="exampleModalLabel">တောလည်ရာကျမ်း</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Deuteronomy" tabindex="-1" aria-labelledby="DeuteronomyLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="exampleModalLabel">တရားဟောရာကျမ်း</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Joshua" tabindex="-1" aria-labelledby="JoshuaLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="exampleModalLabel">ယောရှုမှတ်စာ</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Judges" tabindex="-1" aria-labelledby="JudgesLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="exampleModalLabel">တရားသူကြီးမှတ်စာ</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Ruth" tabindex="-1" aria-labelledby="RuthLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="RuthLabel">ရုသဝတ္ထု</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                      <a href="/Bible/old/Ru/ru1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      <a href="/Bible/old/Ru/ru2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                      <a href="/Bible/old/Ru/ru3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                      <a href="/Bible/old/Ru/ru4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                      
                                    </div>
                                  </div>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Samuel1" tabindex="-1" aria-labelledby="Samuel1Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="Samuel1Label">ဓမ္မရာဇဝင်ပဌမစောင်</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Samuel2" tabindex="-1" aria-labelledby="Samuel2Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="Samuel2Label">ဓမ္မရာဇဝင်ဒုတိယစောင်</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Kings1" tabindex="-1" aria-labelledby="Kings1Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="Kings1Label">ဓမ္မရာဇဝင်တတိယစောင်</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Kings2" tabindex="-1" aria-labelledby="Kings2Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="Kings2Label">ဓမ္မရာဇဝင်စတုတ္ထစောင်</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Chronicles1" tabindex="-1" aria-labelledby="Chronicles1Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="Chronicles1Label">ရာဇဝင်ချုပ်ပဌမစောင်</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Chronicles2" tabindex="-1" aria-labelledby="Chronicles2Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="Chronicles2Label">ရာဇဝင်ချုပ်ဒုတိယစောင်</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Ezra" tabindex="-1" aria-labelledby="EzraLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="EzraLabel">ဧဇရမှတ်စာ</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Nehemiah" tabindex="-1" aria-labelledby="NehemiahLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="NehemiahLabel">နေဟမိမှတ်စာ</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Esther" tabindex="-1" aria-labelledby="EstherLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="EstherLabel">ဧသတာဝတ္ထု။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Job" tabindex="-1" aria-labelledby="JobLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="JobLabel">ယောဘဝတ္ထု။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Psalms" tabindex="-1" aria-labelledby="PsalmsLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="PsalmsLabel">ဆာလံကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
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
                          <div class="modal fade" id="Proverbs" tabindex="-1" aria-labelledby="ProverbsLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="ProverbsLabel">သုတ္တံကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Ecclesiastes" tabindex="-1" aria-labelledby="EcclesiastesLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="EcclesiastesLabel">ဒေသနာကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Song-of-Songs" tabindex="-1" aria-labelledby="Song-of-SongsLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="Song-of-SongsLabel">ရှောလမုန်သီချင်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Isaiah" tabindex="-1" aria-labelledby="IsaiahLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="IsaiahLabel">ဟေရှာယအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Jeremiah" tabindex="-1" aria-labelledby="JeremiahLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="JeremiahLabel">ယေရမိအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Lamentations" tabindex="-1" aria-labelledby="LamentationsLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="LamentationsLabel">ယေရမိမြည်တမ်းစကား။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Ezekiel" tabindex="-1" aria-labelledby="EzekielLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="EzekielLabel">ယေဇကျေလအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Daniel" tabindex="-1" aria-labelledby="DanielLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="DanielLabel">ဒံယေလအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Hosea" tabindex="-1" aria-labelledby="HoseaLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="HoseaLabel">ဟောရှေအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Joel" tabindex="-1" aria-labelledby="JoelLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="JoelLabel">ယောလအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                      <a href="/Bible/old/Joe/joe1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      <a href="/Bible/old/Joe/joe2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                      <a href="/Bible/old/Joe/joe3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Amos" tabindex="-1" aria-labelledby="AmosLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="AmosLabel">အာမုတ်အနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Obadiah" tabindex="-1" aria-labelledby="ObadiahLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="ObadiahLabel">ဩဗဒိအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                      <a href="/Bible/old/Oba/oba1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Jonah" tabindex="-1" aria-labelledby="JonahLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="JonahLabel">ယောနဝတ္ထု။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                      <a href="/Bible/old/Jon/jon1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      <a href="/Bible/old/Jon/jon2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                      <a href="/Bible/old/Jon/jon3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                      <a href="/Bible/old/Jon/jon4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Micah" tabindex="-1" aria-labelledby="MicahLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="MicahLabel">မိက္ခာအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Nahum" tabindex="-1" aria-labelledby="NahumLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="NahumLabel">နာဟုံအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                      <a href="/Bible/old/Nah/nah1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      <a href="/Bible/old/Nah/nah2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                      <a href="/Bible/old/Nah/nah3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Habakkuk" tabindex="-1" aria-labelledby="HabakkukLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="HabakkukLabel">ဟဗက္ကုတ်အနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                      <a href="/Bible/old/Hab/hab1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      <a href="/Bible/old/Hab/hab2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                      <a href="/Bible/old/Hab/hab3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Zephaniah" tabindex="-1" aria-labelledby="ZephaniahLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="ZephaniahLabel">ဇေဖနိအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                      <a href="/Bible/old/Zep/zep1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      <a href="/Bible/old/Zep/zep2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                      <a href="/Bible/old/Zep/zep3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Haggai" tabindex="-1" aria-labelledby="HaggaiLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="MicahLabel">ဟဂ္ဂဲအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                      <a href="/Bible/old/Hag/hag1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      <a href="/Bible/old/Hag/hag2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Zechariah" tabindex="-1" aria-labelledby="ZechariahLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="ZechariahLabel">ဇာခရိအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                              </div>
                            </div>
                          </div>
                          <div class="modal fade" id="Malachi" tabindex="-1" aria-labelledby="MalachiLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-default" id="MalachiLabel">မာလခိအနာဂတ္တိကျမ်း။</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
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
                        <div class="mu-bi">
                            <a href="#New-Test"><button>ဓမ္မသစ်ကျမ်း <i class="fas fa-level-down-alt ml-2"></i></button></a>
                            <a href="#biblemanu"><button>မာတိကာ <i class="fas fa-level-up-alt ml-2"></i></button></a>
                        </div>
                    </div>
                  </div>
                
              </div>
              <hr>
              <div class="row justify-content-center" id="New-Test">
                    <div class="bi-ti">
                        <div class="col-md-12">
                          <div class="bible-menu2">
                              <h4 class="wow animate__animated animate__lightSpeedInLeft animate__delay-0.8s">ဓမ္မသစ်ကျမ်း</h4>
                              <ul class="list-group list-group-horizontal-md" >
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Matthew">ရှင်မဿဲခရစ်ဝင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Mark">ရှင်မာကုခရစ်ဝင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Luke">ရှင်လုကာခရစ်ဝင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#John">ရှင်ယောဟန်ခရစ်ဝင်</li>
                              </ul>
                              <ul class="list-group list-group-horizontal-md">
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Acts">တမန်တော်ဝတ္ထု</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Romans">ရောမဩဝါဒစာ</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Corinthians1">ကောရိန္သုဩဝါဒစာပဌမစောင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Corinthians2">ကောရိန္သုဩဝါဒစာဒုတိယစောင်</li>
                              </ul>
                              <ul class="list-group list-group-horizontal-md">
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Galatians">ဂလာတိဩဝါဒစာ</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Ehpesians">ဧဖက်ဩဝါဒစာ</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Phillippians">ဖိလိပ္ပိဩဝါဒစာ</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Colossians">ကောလောသဲဩဝါဒစာ</li>
                              </ul>
                              <ul class="list-group list-group-horizontal-md">
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Thessalonians1">သက်သာလောနိတ်ဩဝါဒစာပဌမစောင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Thessalonians2">သက်သာလောနိတ်ဩဝါဒစာဒုတိယစောင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Timothy1">တိမောသေဩဝါဒစာပဌမစောင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Timothy2">တိမောသေဩဝါဒစာဒုတိယစာ</li>
                              </ul>
                              <ul class="list-group list-group-horizontal-md">
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Titus">တိတုဩဝါဒစာ</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Philemon">ဖိလေမုန်ဩဝါဒစာ</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Hebrews">ဟေဗြဲဩဝါဒစာ</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#James">ယာကုပ်ဩဝါဒစာ</li>
                              </ul>
                              <ul class="list-group list-group-horizontal-md">
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Peter1">ရှင်ပေတရုဩဝါဒစာပဌမစောင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Peter2">ရှင်ပေတရုဩဝါဒစာဒုတိယစောင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#John1">ရှင်ယောဟန်ဩဝါဒစာပဌမစောင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#John2">ရှင်ယောဟန်ဩဝါဒစာဒုတိယစောင်</li>
                              </ul>
                              <ul class="list-group list-group-horizontal-md">
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#John3">ရှင်ယောဟန်ဩဝါဒစာတတိယစောင်</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Jude">ရှင်ယုဒဩဝါဒစာ</li>
                                <li type="button" class="btn-menu text-center pt-2" data-toggle="modal" data-target="#Revelation">ဗျာဒိတ်ကျမ်း</li>
                              </ul>
                          </div>
                          <div class="">
                            <div class="modal fade" id="Matthew" tabindex="-1" aria-labelledby="MatthewLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="MatthewLabel">ရှင်မဿဲခရစ်ဝင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
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
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Mark" tabindex="-1" aria-labelledby="MarkLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="MarkLabel">ရှင်မာကုခရစ်ဝင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Mark/Mak1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Mark/Mak2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/Mark/Mak3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/Mark/Mak4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/Mark/Mak5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Mark/Mak6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                        <a href="/Bible/new/Mark/Mak7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                        <a href="/Bible/new/Mark/Mak8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                        <a href="/Bible/new/Mark/Mak9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                        <a href="/Bible/new/Mark/Mak10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Mark/Mak11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                        <a href="/Bible/new/Mark/Mak12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                        <a href="/Bible/new/Mark/Mak13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                        <a href="/Bible/new/Mark/Mak14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                        <a href="/Bible/new/Mark/Mak15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Mark/Mak16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                        <a href="/Bible/new/Mark/Mak17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Luke" tabindex="-1" aria-labelledby="LukeLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="LukeLabel">ရှင်လုကာခရစ်ဝင်/h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Luk/Luk1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Luk/Luk2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/Luk/Luk3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/Luk/Luk4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/Luk/Luk5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Luk/Luk6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                        <a href="/Bible/new/Luk/Luk7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                        <a href="/Bible/new/Luk/Luk8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                        <a href="/Bible/new/Luk/Luk9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                        <a href="/Bible/new/Luk/Luk10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Luk/Luk11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                        <a href="/Bible/new/Luk/Luk12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                        <a href="/Bible/new/Luk/Luk13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                        <a href="/Bible/new/Luk/Luk14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                        <a href="/Bible/new/Luk/Luk15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Luk/Luk16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                        <a href="/Bible/new/Luk/Luk17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                        <a href="/Bible/new/Luk/Luk18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                        <a href="/Bible/new/Luk/Luk19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                        <a href="/Bible/new/Luk/Luk20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Luk/Luk21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                        <a href="/Bible/new/Luk/Luk22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                        <a href="/Bible/new/Luk/Luk23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                        <a href="/Bible/new/Luk/Luk24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="John" tabindex="-1" aria-labelledby="JohnLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="JohnLabel">ရှင်ယောဟန်ခရစ်ဝင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Joh/Joh1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Joh/Joh2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/Joh/Joh3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/Joh/Joh4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/Joh/Joh5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Joh/Joh6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                        <a href="/Bible/new/Joh/Joh7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                        <a href="/Bible/new/Joh/Joh8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                        <a href="/Bible/new/Joh/Joh9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                        <a href="/Bible/new/Joh/Joh10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Joh/Joh11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                        <a href="/Bible/new/Joh/Joh12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                        <a href="/Bible/new/Joh/Joh13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                        <a href="/Bible/new/Joh/Joh14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                        <a href="/Bible/new/Joh/Joh15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Joh/Joh16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                        <a href="/Bible/new/Joh/Joh17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                        <a href="/Bible/new/Joh/Joh18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                        <a href="/Bible/new/Joh/Joh19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                        <a href="/Bible/new/Joh/Joh20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Joh/Joh21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Acts" tabindex="-1" aria-labelledby="ActsLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="ActsLabel">တမန်တော်ဝတ္ထု</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Act/Act1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Act/Act2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/Act/Act3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/Act/Act4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/Act/Act5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Act/Act6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                        <a href="/Bible/new/Act/Act7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                        <a href="/Bible/new/Act/Act8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                        <a href="/Bible/new/Act/Act9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                        <a href="/Bible/new/Act/Act10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Act/Act11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                        <a href="/Bible/new/Act/Act12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                        <a href="/Bible/new/Act/Act13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                        <a href="/Bible/new/Act/Act14.html" class="btn-g" role="button" aria-pressed="true">၁၄</a>
                                        <a href="/Bible/new/Act/Act15.html" class="btn-g" role="button" aria-pressed="true">၁၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Act/Act16.html" class="btn-g" role="button" aria-pressed="true">၁၆</a>
                                        <a href="/Bible/new/Act/Act17.html" class="btn-g" role="button" aria-pressed="true">၁၇</a>
                                        <a href="/Bible/new/Act/Act18.html" class="btn-g" role="button" aria-pressed="true">၁၈</a>
                                        <a href="/Bible/new/Act/Act19.html" class="btn-g" role="button" aria-pressed="true">၁၉</a>
                                        <a href="/Bible/new/Act/Act20.html" class="btn-g" role="button" aria-pressed="true">၂၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Act/Act21.html" class="btn-g" role="button" aria-pressed="true">၂၁</a>
                                        <a href="/Bible/new/Act/Act22.html" class="btn-g" role="button" aria-pressed="true">၂၂</a>
                                        <a href="/Bible/new/Act/Act23.html" class="btn-g" role="button" aria-pressed="true">၂၃</a>
                                        <a href="/Bible/new/Act/Act24.html" class="btn-g" role="button" aria-pressed="true">၂၄</a>
                                        <a href="/Bible/new/Act/Act25.html" class="btn-g" role="button" aria-pressed="true">၂၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Act/Act26.html" class="btn-g" role="button" aria-pressed="true">၂၆</a>
                                        <a href="/Bible/new/Act/Act27.html" class="btn-g" role="button" aria-pressed="true">၂၇</a>
                                        <a href="/Bible/new/Act/Act28.html" class="btn-g" role="button" aria-pressed="true">၂၈</a>
                                      </div>
                                    </div>  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Romans" tabindex="-1" aria-labelledby="RomansLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="RomansLabel">ရောမဩဝါဒစာ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
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
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Corinthians1" tabindex="-1" aria-labelledby="Corinthians1Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="Corinthians1Label">ကောရိန္သုဩဝါဒစာပဌမစောင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
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
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Corinthians2" tabindex="-1" aria-labelledby="Corinthians2Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="Corinthians2Label">ကောရိန္သုဩဝါဒစာဒုတိယစောင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/2Cor/2Cor1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/2Cor/2Cor2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/2Cor/2Cor3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/2Cor/2Cor4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/2Cor/2Cor5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/2Cor/2Cor6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                        <a href="/Bible/new/2Cor/2Cor7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                        <a href="/Bible/new/2Cor/2Cor8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                        <a href="/Bible/new/2Cor/2Cor9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                        <a href="/Bible/new/2Cor/2Cor10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/2Cor/2Cor11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                        <a href="/Bible/new/2Cor/2Cor12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                        <a href="/Bible/new/2Cor/2Cor13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                      </div>
                                    </div>  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Galatians" tabindex="-1" aria-labelledby="GalatiansLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="GalatiansLabel">ဂလာတိဩဝါဒစာ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Gla/Gla1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Gla/Gla2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/Gla/Gla3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/Gla/Gla4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/Gla/Gla5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Gla/Gla6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                      </div>
                                    </div>  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Ehpesians" tabindex="-1" aria-labelledby="EhpesiansLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="EhpesiansLabel">ဧဖက်ဩဝါဒစာ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Ep/Ep1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Ep/Ep2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/Ep/Ep3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/Ep/Ep4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/Ep/Ep5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Ep/Ep6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                      </div>
                                    </div> 
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Phillippians" tabindex="-1" aria-labelledby="PhillippiansLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="PhillippiansLabel">ဖိလိပ္ပိဩဝါဒစာ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Php/Php1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Php/Php2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/Php/Php3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/Php/Php4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Colossians" tabindex="-1" aria-labelledby="ColossiansLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="ColossiansLabel">ဓမ္မရာဇဝင်စတုတ္ထစောင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Col/Col1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Col/Col2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/Col/Col3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/Col/Col4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                      </div>
                                    </div> 
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Thessalonians1" tabindex="-1" aria-labelledby="Thessalonians1Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="Thessalonians1Label">သက်သာလောနိတ်ဩဝါဒစာပဌမစောင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/1The/1The1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/1The/1The2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/1The/1The3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/1The/1The4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/1The/1The5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                    </div>  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Thessalonians2" tabindex="-1" aria-labelledby="Thessalonians2Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="Thessalonians2Label">သက်သာလောနိတ်ဩဝါဒစာဒုတိယစောင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/2The/2The1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/2The/2The2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/2The/2The3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Timothy1" tabindex="-1" aria-labelledby="Timothy1Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="Timothy1Label">တိမောသေဩဝါဒစာပဌမစောင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/1Tim/1Tim1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/1Tim/1Tim2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/1Tim/1Tim3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/1Tim/1Tim4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/1Tim/1Tim5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/1Tim/1Tim6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Timothy2" tabindex="-1" aria-labelledby="Timothy2Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="Timothy2Label">တိမောသေဩဝါဒစာဒုတိယစာ/h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/2Tim/2Tim1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/2Tim/2Tim2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/2Tim/2Tim3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/2Tim/2Tim4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Titus" tabindex="-1" aria-labelledby="TitusLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="TitusLabel">တိတုဩဝါဒစာ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Tit/Tit1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Tit/Tit2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="{{route('tit3')}}" class="btn-g" role="button" aria-pressed="true">၃</a>
                                      </div>
                                    </div> 
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Philemon" tabindex="-1" aria-labelledby="PhilemonLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="PhilemonLabel">ဖိလေမုန်ဩဝါဒစာ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="{{route('Phm1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      </div>
                                    </div>  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Hebrews" tabindex="-1" aria-labelledby="HebrewsLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="HebrewsLabel">ဟေဗြဲဩဝါဒစာ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="{{route('heb1')}}" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Heb/Heb2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/Heb/Heb3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/Heb/Heb4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/Heb/Heb5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Heb/Heb6.html" class="btn-g" role="button" aria-pressed="true">၆</a>
                                        <a href="/Bible/new/Heb/Heb7.html" class="btn-g" role="button" aria-pressed="true">၇</a>
                                        <a href="/Bible/new/Heb/Heb8.html" class="btn-g" role="button" aria-pressed="true">၈</a>
                                        <a href="/Bible/new/Heb/Heb9.html" class="btn-g" role="button" aria-pressed="true">၉</a>
                                        <a href="/Bible/new/Heb/Heb10.html" class="btn-g" role="button" aria-pressed="true">၁၀</a>
                                      </div>
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Heb/Heb11.html" class="btn-g" role="button" aria-pressed="true">၁၁</a>
                                        <a href="/Bible/new/Heb/Heb12.html" class="btn-g" role="button" aria-pressed="true">၁၂</a>
                                        <a href="/Bible/new/Heb/Heb13.html" class="btn-g" role="button" aria-pressed="true">၁၃</a>
                                      </div>
                                    </div>  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="James" tabindex="-1" aria-labelledby="JamesLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="JamesLabel">ယာကုပ်ဩဝါဒစာ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Jam/Jam1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/Jam/Jam2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/Jam/Jam3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/Jam/Jam4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/Jam/Jam5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                    </div>   
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Peter1" tabindex="-1" aria-labelledby="Peter1Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="Peter1Label">ရှင်ပေတရုဩဝါဒစာပဌမစောင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/1Pet/1Pet1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/1Pet/1Pet2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/1Pet/1Pet3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/1Pet/1Pet4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/1Pet/1Pet5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                    </div>   
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Peter2" tabindex="-1" aria-labelledby="Peter2Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="Peter2Label">ရှင်ပေတရုဩဝါဒစာဒုတိယစောင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/2Pet/2Pet1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/2Pet/2Pet2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/2Pet/2Pet3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                      </div>  
                                    </div> 
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="John1" tabindex="-1" aria-labelledby="John1Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="John1Label">ရှင်ယောဟန်ဩဝါဒစာပဌမစောင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/1Joh/1Joh1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                        <a href="/Bible/new/1Joh/1Joh2.html" class="btn-g" role="button" aria-pressed="true">၂</a>
                                        <a href="/Bible/new/1Joh/1Joh3.html" class="btn-g" role="button" aria-pressed="true">၃</a>
                                        <a href="/Bible/new/1Joh/1Joh4.html" class="btn-g" role="button" aria-pressed="true">၄</a>
                                        <a href="/Bible/new/1Joh/1Joh5.html" class="btn-g" role="button" aria-pressed="true">၅</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="John2" tabindex="-1" aria-labelledby="John2Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="John2Label">ရှင်ယောဟန်ဩဝါဒစာဒုတိယစောင်</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/2Joh/2Joh1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="John3" tabindex="-1" aria-labelledby="John3Label" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="John3Label">ရှင်ယောဟန်ဩဝါဒစာတတိယစောင်/h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/3Joh/3Joh1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Jude" tabindex="-1" aria-labelledby="JudeLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="JudeLabel">ရှင်ယုဒဩဝါဒစာ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                      <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/Bible/new/Jud/jud1.html" class="btn-g" role="button" aria-pressed="true">၁</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="Revelation" tabindex="-1" aria-labelledby="RevelationLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title text-default" id="RevelationLabel">ဗျာဒိတ်ကျမ်း</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
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
                            <div class="mu-bi">
                                <a href="#Old-Test"><button>ဓမ္မဟောင်းကျမ်း <i class="fas fa-level-up-alt ml-2"></i></button></a>
                                <a href="#biblemanu"><button>မာတိကာ <i class="fas fa-level-up-alt ml-2"></i></button></a>
                            </div>
                        </div>
                    </div>
              </div>
              <hr>
              <div class="row">
                  <div class="">

                  </div>
              </div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
          </div>
      </div>
@endsection