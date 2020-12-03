@extends("Layout.Layout")
@section("content")

    <div class="book-bg">
        <div class="container">

        </div>
    </div>
    <div class="book-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="book-list">
                        <h3>စာအုပ်အမျိုးအစားများ</h3>
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action list-group-item-danger active" id="list-home-list" data-toggle="list" href="#list-home"
                              role="tab" aria-controls="home"><i class="fas fa-book fa-1x mr-2 grey p-2  blue-grey rounded-circle"></i>အသက်တာဆိုင်ရာ</a>
                            <a class="list-group-item list-group-item-action list-group-item-danger" id="list-profile-list" data-toggle="list" href="#list-profile"
                              role="tab" aria-controls="profile"><i class="fas fa-book fa-1x mr-2 grey p-2  blue-grey rounded-circle"></i>ဆုတောင်းခြင်း</a>
                            <a class="list-group-item list-group-item-action list-group-item-danger" id="list-messages-list" data-toggle="list" href="#list-messages"
                              role="tab" aria-controls="messages"><i class="fas fa-book fa-1x mr-2 grey p-2  blue-grey rounded-circle"></i>ဝိညာဉ်ရေးရာ</a>
                            <a class="list-group-item list-group-item-action list-group-item-danger" id="list-settings-list" data-toggle="list" href="#list-settings"
                              role="tab" aria-controls="settings"><i class="fas fa-book fa-1x mr-2 grey p-2  blue-grey rounded-circle"></i>တပည့်တော်ဖြစ်</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="book-tab mt-5">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                              <div class="row">
                                <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                   <a href=""> <img src="{{asset('Image/fatherhood.jpg')}}" class="img-fluid z-depth-1 img-thumbnail" alt="Responsive image"></a>
                                </div>
                                <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                    <a href=""> <img src="{{asset('Image/fatherhood.jpg')}}" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                 </div>
                                 <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                    <a href=""> <img src="{{asset('Image/fatherhood.jpg')}}" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                 </div>
                                 <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                    <a href=""> <img src="{{asset('Image/fatherhood.jpg')}}" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                 </div>
                              </div>
                              <div class="row">
                                <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                   <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                </div>
                                <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                    <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                 </div>
                                 <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                    <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                 </div>
                                 <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                    <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                 </div>
                              </div>
                              <div class="row">
                                <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                   <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                </div>
                                <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                    <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                 </div>
                                 <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                    <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                 </div>
                                 <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                    <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                 </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                       <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                    </div>
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                       <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                    </div>
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                       <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                    </div>
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                       <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                    </div>
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                       <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                    </div>
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                       <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                    </div>
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                       <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                    </div>
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                       <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                    </div>
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                       <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                    </div>
                                    <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                     <div class="col-xl-3 col-md-4 mb-3 text-right animate__animated animate__pulse wow">
                                        <a href=""> <img src="https://mdbootstrap.com/img/Photos/Avatars/img(30).jpg" class="img-fluid z-depth-1" alt="Responsive image"></a>
                                     </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div><hr>

    <div class="">
        <div class="container">
            <!-- Biblestudy -->
          <div class="row">
            <div class="jumbotron text-center hoverable p-4">
              <div class="row">
                <div class="col-md-4 offset-md-1 mx-3 my-3">
                  <div class="view overlay">
                    <img src="{{asset('Image/Bible study.png')}}" class="img-fluid" alt="Sample image for first version of blog listing">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                  </div>
                </div>
                <div class="col-md-7 text-md-left ml-3 mt-3">
                      <a href="" class="green-text">
                        <h6 class="h6 pb-1"><i class="fas fa-bible pr-1"></i>Lesson</h6>
                      </a>
                        <h4 class="h4 mb-4">Bible Study</h4>
                        <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
                        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                        <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>
                      <a class="btn btn-success" href="{{route('Biblestudy')}}">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


@endsection
