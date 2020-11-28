@extends("Layout.Layout")
@section("content")
    <div class="Reg-bg">
        <!-- Content -->
        <div class="container">
                <!--Grid row-->
              <div class="row">
                  <!--Grid column-->
                <div class="col-md-12 mb-4 white-text text-center">
                <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>
                This is only the beginning.
                </strong></h5>
                    <h1 class="h1-reg-font mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>
                    Thank You for Joining the Cause!
                    </strong></h1>
                    <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                    
                </div>
                <div class="col-md-12 text-center mt-5">
                <a class="btn-reg wow fadeInDown" data-wow-delay="0.4s" href="#Contentlist"><i class="fas fa-chevron-down"></i></a>
                </div>
                  <!--Grid column-->
              </div>
                <!--Grid row-->
          </div>
              <!-- Content -->
    </div>
    <!-- reg-content -->
    <div class="reg-content">
        <div class="container">
            <div class="row" id="Contentlist">
                <div class="col-4 mt-5">
                    <!-- Card -->
                    <div class="card card-image card-im">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                            <div>
                            <h5 class="pink-text">Loyal Land</h5>
                            <h3 class="card-title pt-2"><strong>Bible</strong></h3>
                            <p>ဟေဗြဲ၊ဟေလသပါဠိတော်မှ၊မြန်မာဘာသာအားဖြင့်၊ဆရာယုဒသန်အနက်ပြန်သောဓမ္မဟောင်းကျမ်းနှင့်ဓမ္မသစ်ကျမ်း</p>
                                <a class="btn btn-danger" href="{{route('bible')}}"><i class="fas fa-clone left"></i> Read More</a>
                            </div>
                        </div>

                    </div>
                <!-- Card -->
                </div>
                <div class="col-4 mt-5">
                    <!-- Card -->
                    <div class="card card-image card-im">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                            <div>
                            <h5 class="pink-text">Loyal Land</h5>
                            <h3 class="card-title pt-2"><strong>Prayer</strong></h3>
                            <p>ဟေဗြဲ၊ဟေလသပါဠိတော်မှ၊မြန်မာဘာသာအားဖြင့်၊ဆရာယုဒသန်အနက်ပြန်သောဓမ္မဟောင်းကျမ်းနှင့်ဓမ္မသစ်ကျမ်း</p>
                                <a class="btn btn-danger" href="{{route('prayer')}}"><i class="fas fa-clone left"></i> Read More</a>
                            </div>
                        </div>

                    </div>
                <!-- Card -->
                </div>
                <div class="col-4 mt-5">
                    <!-- Card -->
                    <div class="card card-image card-im">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                            <div>
                            <h5 class="pink-text">Loyal Land</h5>
                            <h3 class="card-title pt-2"><strong>Books</strong></h3>
                            <p>ဟေဗြဲ၊ဟေလသပါဠိတော်မှ၊မြန်မာဘာသာအားဖြင့်၊ဆရာယုဒသန်အနက်ပြန်သောဓမ္မဟောင်းကျမ်းနှင့်ဓမ္မသစ်ကျမ်း</p>
                                <a class="btn btn-danger" href="{{route('book')}}"><i class="fas fa-clone left"></i> Read More</a>
                            </div>
                        </div>

                    </div>
                <!-- Card -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                    <img src="{{asset('Image/loyallogo4.png')}}" class="mt-5 mb-5 " alt="">
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>
@endsection