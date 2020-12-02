@extends("Layout.Layout")
@section("content")
<!-- contact main -->
    <div class="bg-cont">
              <!-- Content -->
          <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="h4-font">Loyal Land</h4>
                    </div>
                </div>
                <!--Grid row-->
              <div class="row">
                  <!--Grid column-->
                <div class="col-md-12 mb-4 white-text text-center">
                    <h1 class="h1-font-con mb-0 pt-md-5 pt-5 mt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>Contact_us</strong></h1>
                </div>
                  <!--Grid column-->
              </div>
              <div class="row justify-content-center">
              <div class="con-for mb-5 mt-5">
                    <ul>
                    <li><i class="fas fa-envelope-open-text "></i>loyalland976@gmail.com</li>
                        <li><i class="fas fa-map-marker-alt"></i></i>174(B), U Aung Min St, (2)Qtr, Mayangon Township, Yangon. </li>
                        <li><i class="fas fa-phone "></i></i>+95 9790000000</li>
                        <li></li>
                    </ul>
                </div>
              </div>
                <!--Grid row-->
          </div>
              <!-- Content -->
      </div>
<!-- contact main -->

<!-- contact form -->
    <div class="content-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <!-- Material form contact -->
                <div class="card mt-5 mb-5">
                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Contact us</strong>
                    </h5>

            <!--Card content-->
                <div class="card-body px-lg-5 pt-0">
                    @if(Session('consuccess'))
                    <div class="text-center mt-2">
                      {{Session('consuccess')}}
                    </div>   
                    @endif
                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="{{route('usercontact')}}" method="post">
                    @csrf
                        <!-- Name -->
                        <div class="md-form mt-3">
                            <input type="text" id="materialContactFormName" class="form-control" name="username">
                            <label for="materialContactFormName">Name</label>
                        </div>
                        @error("username")
                      <p class="text-danger" >{{$message}}</p>
                        @enderror
                        <!-- E-mail -->
                        <div class="md-form">
                        <input type="email" id="materialContactFormEmail" class="form-control" name="useremail">
                        <label for="materialContactFormEmail">E-mail</label>
                        </div>
                         @error("useremail")
                      <p class="text-danger" >{{$message}}</p>
                        @enderror
                        <!-- Phone -->
                        <div class="md-form mt-3">
                            <input type="text" id="materialContactFormPhone" class="form-control" name="userphone">
                            <label for="materialContactFormPhone">Phone</label>
                        </div>
                        @error("userphone")
                      <p class="text-danger" >{{$message}}</p>
                        @enderror
                       
                        <!--Message-->
                        <div class="md-form">
                        <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3" name="usermessage"></textarea>
                        <label for="materialContactFormMessage">Message</label>
                        </div>
                        @error("usermessage")
                      <p class="text-danger" >{{$message}}</p>
                        @enderror
                        <!-- Copy -->
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialContactFormCopy" name="usercheck">
                        <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
                        </div>
                        <!-- Send button -->
                        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

                    </form>
                    <!-- Form -->

                </div>

                </div>
                <!-- Material form contact -->

            </div>
        </div>
<!-- contact form -->
        <div class="row"></div>
    </div>
    </div>
@endsection