@extends("Layout.Layout")
@section("content")

    <div class="bg-pray">
        <div class="mask rgba-cyan-light align-items-center">
              <!-- Content -->
          <div class="container">
                <!--Grid row-->
              <div class="row">
                  <!--Grid column-->
                <div class="col-md-12 mb-4 white-text text-center">
                    <h1 class="h1-font mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>Prayer</strong></h1>
                    <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
                    <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>ဆုတောင်းချက်များကို သင်ကိုယ်တိုင်လည်းပါဝင် ဆုတောင်းပေးနိုင်ပါသည်။</strong></h5>
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
          <div class="row">
            <div class="col-md-5" id="Prayform">
              <!-- prayform -->
                <form class="prayform teal lighten-4" action="{{router('prayuser')}}" method="POST">
                @csrf
                    <h4 class="h mb-2 ">ဆုတောင်းချက်တင်ရန်</h4><hr>
                    <p>ကျေးဇူးပြု၍ ဇယားကွက်တွင် ဆုတောင်းချက် သို့မဟုတ် ကျေးဇူးတော်ချီးမွမ်းခြင်းကို တစ်ခုသာ ရေးပေးပါ။</p>
                    <p>ပြန်လည်၍ ဖော်ပြ၍မရသော အထိအခိုက်မခံသော စာသားများမရေးသားပါနှင့်။</p>
                    <p>Please enter only 1 prayer or praise request for each box.</p>
                    <p>Please do not enter sensitive information that cannot be published</p><hr>
                  <!-- Default input -->
                  <label for="inputDisabledEx2" class="disabled mt-2">အမည်/Name</label>
                  <input type="text" id="inputDisabledEx2" class="form-control" name="Prayname">
                  <!-- type -->
                  <label for="inputDisabledEx3" class="disabled mt-3 ">အမျိုးအစား/Type</label>
                  <select class="ll-select" name="Prayselect">
                    <option value="" disabled>Select</option>
                    <option value="0">Prayer</option>
                    <option value="1">Praise</option>
                  </select>
                  <!-- textarea -->
                  <label for="exampleFormControlTextarea5" class="disabled lable">ဆုတောင်းချက်/Text</label>
                    <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" name="Praytextarea"></textarea>
                  <!-- Sign in button -->
                  <button class="btn-pray" type="submit">Save</button>
                </form>
            </div>
          </div><hr>
        <div class="row">
        <div class="col-md-12">
            <!-- Collapse buttons -->
<div>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
    aria-expanded="false" aria-controls="collapseExample">
  <h4>ဆုတောင်းချက်များကြည့်ရန်</h4>
  </button>
</div>
<!-- / Collapse buttons -->

<!-- Collapsible element -->
<div class="collapse" id="collapseExample">
  <div class="mt-3">
              <p>ဆုတောင်းချက်များကို သင်ကိုယ်တိုင်လည်းပါဝင် ဆုတောင်းပေးနိုင်ပါသည်။</p>
              <div class="table-wrapper-scroll-y my-custom-scrollbar mt-2">
              <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                        <th scope="col">အမည်/Name</th>
                        <th scope="col">အမျိုးအစား/Type</th>
                        <th scope="col">ဆုတောင်းချက်/Text</th>
                        </tr>
                  </thead>
                    <tbody>
                     <tr>
                       <td>Mark                 </td>
                       <td>Otto                 </td>
                       <td>@mdo     </td>
                      </tr>
                     <tr>
                       <td>Jacob                </td>
                       <td>Thornton   </td>
                       <td>@fat                 </td>
                      </tr>
                     <tr>
                       <td>Larr</td>
                       <td>the Bird  </td>
                       <td>@twitter </td>
                      </tr>
                     <tr>
                       <td>Kyaw Kyaw</td>
                       <td>Otto</td>
                       <td>Please enter only 1 prayer or praise request for each box.</td>
                      </tr>
                     <tr>
                       <td>Jacob                </td>
                       <td>Thornton                 </td>
                       <td>@fat                 </td>
                      </tr>
                     <tr>
                       <td>Larry                </td>
                       <td>the Bird                 </td>
                       <td>@twitter                 </td>
                      </tr>
                      </tbody>
                  </table>

                  </div>
  </div>
</div>
<!-- / Collapsible element -->
            </div>
        </div><hr>
        </div>
    </div>
    <div class="cardindex">
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
    <a href="{{route('book')}}" type="button" class="btn-card" >Read more</a>

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
  <div class="card-body teal lighten-4" >

    <!--Title-->
    <h4 class="card-title font-weight-bold pink-lighter-hover">Bible</h4>
    <!--Text-->
    <p class="card-text">ဟေဗြဲ၊ဟေလသပါဠိတော်မှ၊မြန်မာဘာသာအားဖြင့်၊ဆရာယုဒသန်အနက်ပြန်သောဓမ္မဟောင်းကျမ်းနှင့်ဓမ္မသစ်ကျမ်း</p>
    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <a href="{{route('bible')}}" type="button" class="btn-card" >Read more</a>

  </div>

</div>
<!-- Card -->

<!-- Card -->
<div class="card mb-4">

  <!--Card image-->
  <div class="view overlay">
    <img class="card-img-top" src="{{asset('Image/Bible study.png')}}"
      alt="Card image cap">
    <a href="">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!--Card content-->
  <div class="card-body teal lighten-4">

    <!--Title-->
    <h4 class="card-title font-weight-bold pink-lighter-hover">Bible Study</h4>
    <!--Text-->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
      content.</p>
    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
    <a href="" type="button" class="btn-card" >Read more</a>

  </div>

</div>
<!-- Card -->

</div>
<!-- Card deck -->
          </div>
          </div>
        </div>

@endsection