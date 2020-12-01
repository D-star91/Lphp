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
                    <a href="{{route('bible')}}" type="submit" class="btn-in" >Bible</a>
                </div>
                  <!--Grid column-->
              </div>
                <!--Grid row-->
          </div>
              <!-- Content -->
        </div> 
      </div>
      <!-- prayer content -->
      <div class="prayer">
        <div class="container">
          <div class="row ">
            <div class="col-md-5" id="Prayform">
              <!-- prayform -->
                <form class="prayform teal lighten-4" action="" method="POST">
                @csrf
                    <h4 class="h mb-2 ">ဆုတောင်းချက်တင်ရန်</h4><hr>
                    <p>ကျေးဇူးပြု၍ ဇယားကွက်တွင် ဆုတောင်းချက် သို့မဟုတ် ကျေးဇူးတော်ချီးမွမ်းခြင်းကို တစ်ခုသာ ရေးပေးပါ။</p>
                    <p>ပြန်လည်၍ ဖော်ပြ၍မရသော အထိအခိုက်မခံသော စာသားများမရေးသားပါနှင့်။</p>
                    <p>Please enter only 1 prayer or praise request for each box.</p>
                    <p>Please do not enter sensitive information that cannot be published</p><hr>
                  <!-- Default input -->
                  <label for="inputDisabledEx2" class="disabled mt-2">အမည်/Name</label>
                  <input type="text" id="inputDisabledEx2" class="form-control" >
                  <!-- type -->
                  <label for="inputDisabledEx3" class="disabled mt-3 ">အမျိုးအစား/Type</label>
                  <select class="ll-select">
                    <option value="" disabled>Select</option>
                    <option value="0">Prayer</option>
                    <option value="1">Praise</option>
                  </select>
                  <!-- textarea -->
                  <label for="exampleFormControlTextarea5" class="disabled lable">ဆုတောင်းချက်/Text</label>
                    <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                  <!-- Sign in button -->
                  <button class="btn-pray" type="submit">Save</button>
                </form>
            </div>
            <div class="col-7">
              <div class="mt-5 text-center ">
                <h3 class="h mb-4">နေ့စဉ်ကျမ်းပိုဒ်</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias fuga explicabo aspernatur! Accusantium, sed omnis quam inventore dignissimos labore accusamus corrupti consequatur sit iusto vitae saepe aut eos quaerat repudiandae?</p><hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias fuga explicabo aspernatur! Accusantium, sed omnis quam inventore dignissimos labore accusamus corrupti consequatur sit iusto vitae saepe aut eos quaerat repudiandae?</p><hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias fuga explicabo aspernatur! Accusantium, sed omnis quam inventore dignissimos labore accusamus corrupti consequatur sit iusto vitae saepe aut eos quaerat repudiandae?</p><hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
              </div>
            </div>
            </div><hr>
        </div>
        </div>
        <div class="card-index">
          <div class="container">
            <div class="row">
            <!-- Card deck -->
<div class="card-deck mt-4">

<!-- Card -->
<div class="card mb-4">

  <!--Card image-->
  <div class="view overlay">
    <img class="card-img-top" src="{{asset('Image/books.png')}}"
      alt="Card image cap">
    <a href="{{route('book')}}">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!--Card content-->
  <div class="card-body teal lighten-4">

    <!--Title-->
    <h4 class="card-title font-weight-bold pink-lighter-hover">Books</h4>
    <!--Text-->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
      content.</p>
    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <a href="{{route('book')}}" type="submit" class="btn-card" >Read more</a>

  </div>

</div>
<!-- Card -->

<!-- Card -->
<div class="card mb-4">

  <!--Card image-->
  <div class="view overlay">
    <img class="card-img-top" src="{{asset('Image/bibles.png')}}"
      alt="Card image cap">
    <a href="{{route('bible')}}">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!--Card content-->
  <div class="card-body teal lighten-4" action="{{route('bible')}}">

    <!--Title-->
    <h4 class="card-title font-weight-bold pink-lighter-hover">Bible</h4>
    <!--Text-->
    <p class="card-text">ဟေဗြဲ၊ဟေလသပါဠိတော်မှ၊မြန်မာဘာသာအားဖြင့်၊ဆရာယုဒသန်အနက်ပြန်သောဓမ္မဟောင်းကျမ်းနှင့်ဓမ္မသစ်ကျမ်း</p>
    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <a href="{{route('bible')}}" type="submit" class="btn-card" >Read more</a>

  </div>

</div>
<!-- Card -->

<!-- Card -->
<div class="card mb-4">

  <!--Card image-->
  <div class="view overlay">
    <img class="card-img-top" src="{{asset('Image/Pray (1).png')}}"
      alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!--Card content-->
  <div class="card-body teal lighten-4">

    <!--Title-->
    <h4 class="card-title font-weight-bold pink-lighter-hover">Prayer</h4>
    <!--Text-->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
      content.</p>
    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <a href="{{route('prayer')}}" type="button" class="btn-card" >Read more</a>

  </div>

</div>
<!-- Card -->

</div>
<!-- Card deck -->
            </div><hr>
            <div class="row">
              <!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 offset-md-1 mx-3 my-3">

      <!-- Featured image -->
      <div class="view overlay">
        <img src="{{asset('Image/Bible study.png')}}" class="img-fluid" alt="Sample image for first version of blog listing">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">

      <!-- Excerpt -->
      <a href="" class="green-text">
        <h6 class="h6 pb-1"><i class="fas fa-bible pr-1"></i>Lesson</h6>
      </a>

      <h4 class="h4 mb-4">Bible Study</h4>

      <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
        rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
      <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>

      <a class="btn btn-success" href="">Read more</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- News jumbotron -->
            </div><hr>
            <div class="row">
              <!--Section: Testimonials v.1-->
<section class="section pb-3 text-center">

  <!--Section heading-->
  <h1 class="section-heading h1 pt-4">Testimony</h1>
  <!--Section description-->
  <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
    numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur
    accusamus veniam.</p>

  <div class="row">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!-- Card -->
<div class="card testimonial-card">

  <!-- Background color -->
  <div class="card-up indigo lighten-1"></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white mt-2">
    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle"
      alt="woman avatar">
  </div>

  <!-- Content -->
  <div class="card-body test-a">
    <!-- Name -->
    <h4 class="card-title">Anna Doe</h4>
    <hr>
    <!-- Quotation -->
    <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
    </p>
    <a href="">Read more</a>
  </div>

</div>
<!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!-- Card -->
<div class="card testimonial-card">

  <!-- Background color -->
  <div class="card-up indigo lighten-1"></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white mt-2">
    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle"
      alt="woman avatar">
  </div>

  <!-- Content -->
  <div class="card-body test-a">
    <!-- Name -->
    <h4 class="card-title">Anna Doe</h4>
    <hr>
    <!-- Quotation -->
    <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
    </p>
    <a href="">Read more</a>
  </div>

</div>
<!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <!-- Card -->
<div class="card testimonial-card">

  <!-- Background color -->
  <div class="card-up indigo lighten-1"></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white mt-2">
    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle"
      alt="woman avatar">
  </div>

  <!-- Content -->
  <div class="card-body test-a">
    <!-- Name -->
    <h4 class="card-title">Anna Doe</h4>
    <hr>
    <!-- Quotation -->
    <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
    </p>
    <a href="">Read more</a>
  </div>

</div>
<!-- Card -->

    </div>
    <!--Grid column-->

  </div>

</section>
<!--Section: Testimonials v.1-->
            </div><hr>
            <div class="row">
              <div class="col-md-12">
                <!-- Card -->
                <div class="card card-image mb-4"
                  style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                <!-- Content -->
                  <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                    <div>
                      <h3 class="card-title pt-2"><strong>Contact us</strong></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                          optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                          Odit sed qui, dolorum!.</p>
                      <a class="btn btn-pink"><i class="fas fa-clone left"></i> Join</a>
                    </div>
                  </div>

                </div>
                <!-- Card -->
              </div>
            </div>
          </div>
        </div>

        
    
@endsection