@extends("Layout.Layout")
@section("content")
    
      <div class="bg">
        <div class="mask rgba-cyan-light align-items-center">
              <!-- Content -->
          <div class="container">
                <!--Grid row-->
              <div class="row">
                  <!--Grid column-->
                <div class="col-md-12 mb-4 white-text text-center">
                    <h1 class="h1-font mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>Loyal Land</strong></h1>
                    <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                    <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Ministry</strong></h5>
                    <a class="btn-in wow fadeInDown" data-wow-delay="0.4s" href="{{route('bible')}}">Bible</a>
                    <a class="btn-in wow fadeInDown" data-wow-delay="0.4s" href="{{route('book')}}">Book</a>
                </div>
                  <!--Grid column-->
              </div>
                <!--Grid row-->
          </div>
              <!-- Content -->
        </div> 
      </div>
        
      
@endsection