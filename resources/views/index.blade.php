@extends("Layout.Layout")
@section("content")
    
      <div class="bg">
        <div class="mask rgba-cyan-light align-items-center">
          <div class="container">
              <div class="row">
                <div class="col-md-12 mb-4 white-text text-center">
                    <h1 class="h1-font mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>LOYAL LAND</strong></h1>
                    <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                    <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Ministry</strong></h5>
                    <a href="{{route('bible')}}" type="submit" class="btn-in" >Bible</a>
                </div>
              </div>
          </div>
        </div> 
      </div>
      <!-- prayer content -->
      <div class="prayer">
        <div class="container">
          <div class="row ">
            <div class="col-md-5" id="Prayform">
              <!-- prayform -->
                <form class="prayform teal lighten-4" action="{{route('prayuser')}}" method="POST">
                @csrf
                    <h4 class="h mb-2 ">ဆုတောင်းချက်တင်ရန်</h4><hr>
                    <p>ကျေးဇူးပြု၍ ဇယားကွက်တွင် ဆုတောင်းချက် သို့မဟုတ် ကျေးဇူးတော်ချီးမွမ်းခြင်းကို တစ်ခုသာ ရေးပေးပါ။</p>
                    <p>ပြန်လည်၍ ဖော်ပြ၍မရသော အထိအခိုက်မခံသော စာသားများမရေးသားပါနှင့်။</p>
                    <p>Please enter only 1 prayer or praise request for each box.</p>
                    <p>Please do not enter sensitive information that cannot be published</p><hr>
                  <!-- Default input -->
                  <label for="inputDisabledEx2" class="disabled mt-2">အမည်/Name</label>
                  <input type="text" id="inputDisabledEx2" class="form-control" name="Prayname">
                  @error("Prayname")
                      <p class="text-danger" >ကျေးဇူးပြု၍အမည်ရေးထည့်ပေးပါ။</p>
                  @enderror
                  <label for="inputDisabledEx3" class="disabled mt-3 ">အမျိုးအစား/Type</label>
                  <select class="ll-select" name="Prayselect">
                    <option value="" disabled>Select</option>
                    <option value="Prayer">Prayer</option>
                    <option value="Praise">Praise</option>
                  </select>
                  <label for="exampleFormControlTextarea5" class="disabled lable">ဆုတောင်းချက်/Text</label>
                    <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" name="Praytextarea"></textarea>
                  @error("Praytextarea")
                      <p class="text-danger" >ကျေးဇူးပြု၍ဆုတောင်းချက်ရေးပေးပါ။</p>
                  @enderror
                  <button class="btn-pray" type="submit">Save</button>
                  @if(Session('pray'))
                    <div class="text-center mt-2">
                      {{Session('pray')}}
                    </div>   
                  @endif
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
            <div class="card-deck mt-4">
              <div class="card mb-4">
                <div class="view overlay">
                  <img class="card-img-top" src="{{asset('Image/books.png')}}"
                      alt="Card image cap">
                  <a href="{{route('book')}}">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <div class="card-body teal lighten-4">
                  <h4 class="card-title font-weight-bold pink-lighter-hover">Books</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                  </p>
                  <a href="{{route('book')}}" type="submit" class="btn-card" >Read more</a>

                </div>

              </div>

              <div class="card mb-4">
                <div class="view overlay">
                  <img class="card-img-top" src="{{asset('Image/bibles.png')}}"
                  alt="Card image cap">
                    <a href="{{route('bible')}}">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <div class="card-body teal lighten-4" action="{{route('bible')}}">
                   <h4 class="card-title font-weight-bold pink-lighter-hover">Bible</h4>
                    <p class="card-text">ဟေဗြဲ၊ဟေလသပါဠိတော်မှ၊မြန်မာဘာသာအားဖြင့်၊ဆရာယုဒသန်အနက်ပြန်သောဓမ္မဟောင်းကျမ်းနှင့်ဓမ္မသစ်ကျမ်း</p>
                      <a href="{{route('bible')}}" type="submit" class="btn-card" >Read more</a>
                </div>

              </div>
              <div class="card mb-4">
                <div class="view overlay">
                    <img class="card-img-top" src="{{asset('Image/Pray (1).png')}}"
                      alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <div class="card-body teal lighten-4">
                    <h4 class="card-title font-weight-bold pink-lighter-hover">Prayer</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                    <a href="{{route('prayer')}}" type="button" class="btn-card" >Read more</a>
                </div>
              </div>
            </div>
          </div><hr>
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
                      <a class="btn btn-success" href="{{route('Biblehome')}}">Read more</a>
                </div>
              </div>
            </div>
          </div><hr>
          <!-- Testimony -->
          <div class="row">
            <section class="section pb-3 text-center">
              <h1 class="section-heading h1 pt-4">Testimony</h1>
                <p class="section-description">ထာဝရဘုရားသခင်သည် လူသားများအပေါ် ကောင်းမြတ်ခြင်းသက်သေများကို ခံစားရ၍ ပြန်လည်ဝေမျှသက်သေခံချက်များကို 
                ဖတ်ရှု၍ ခွန်အားယူလိုက်ပါ။ 
                </p>
            <div class="row">
              <!-- Testimony 1 -->
              <div class="col-lg-4 col-md-12 mb-4">
                <div class="card testimonial-card">
                  <div class="card-up indigo lighten-1"></div>
                  <div class="avatar mx-auto white mt-2">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle"
                      alt="woman avatar">
                  </div>
                  <div class="card-body test-a">
                    <h4 class="card-title">Anna Doe</h4>
                    <hr>
                      <p><i class="fas fa-quote-left"></i> 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
                      </p>
                    <a href="">Read more</a>
                  </div>
                </div>
              </div>
              <!-- Testimony 2 -->
              <div class="col-lg-4 col-md-12 mb-4">
                <div class="card testimonial-card">
                  <div class="card-up indigo lighten-1"></div>
                    <div class="avatar mx-auto white mt-2">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle"
                        alt="woman avatar">
                    </div>
                    <div class="card-body test-a">
                      <h4 class="card-title">Anna Doe</h4>
                      <hr>
                        <p><i class="fas fa-quote-left"></i> 
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
                        </p>
                      <a href="">Read more</a>
                    </div>
                  </div>
                </div>
                <!-- Testimony 3 -->
                <div class="col-lg-4 col-md-12 mb-4">
                  <div class="card testimonial-card">
                    <div class="card-up indigo lighten-1"></div>
                      <div class="avatar mx-auto white mt-2">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle"
                          alt="woman avatar">
                      </div>
                      <div class="card-body test-a">
                        <h4 class="card-title">Anna Doe</h4>
                      <hr>
                        <p><i class="fas fa-quote-left"></i> 
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
                        </p>
                        <a href="">Read more</a>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
          </div><hr>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-image mb-4"
                  style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                  <div>
                    <h3 class="card-title pt-2"><strong>Testimony</strong></h3>
                      <p>ထာဝရဘုရားသခင်သည် သင်၏အပေါ်၌ နေ့ရက်စဉ်ကောင်းမြတ်ခြင်းများကို ခွန်အားပေး၍ ပြန်လည်ဝေမျှနိုင်ပါသည်။ သင်၏သက်သေခံချက်များဖြင့်
                      ဖတ်ရှုမိသောသူအယောက်စီတိုင်းအတွက် ခွန်အားဖြစ်စေမည်မှာအမှန်ပေ။ ထိုကြောင့် ယခုပင် ဘုရားသခင်၏ကောင်းမြတ်ခြင်းကို သက်သေခံချက်များ ရေးသားပေးပို့နိုင်ပါသည်။
                      </p>
                      <a class="btn btn-pink" href="{{route('Testimony')}}"><i class="fas fa-clone left"></i> သက်သေခံချက်ရေးရန် </a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

        
    
@endsection