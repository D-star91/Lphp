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
      <!-- prayer content -->
      <div class="prayer">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <!-- prayform -->
                <form class="prayform" action="" method="POST">
                @csrf
                    <h4 class="h mb-2 ">ဆုတောင်းချက်တင်ရန်</h4><hr>
                    <p>ကျေးဇူးပြု၍ ဇယားကွက်တွင် ဆုတောင်းချက် သို့မဟုတ် ကျေးဇူးတော်ချီးမွမ်းခြင်းကို တစ်ခုသာ ရေးပေးပါ။</p>
                    <p>Please enter only 1 prayer or praise request for each box.</p>
                    <p>ပြန်လည်၍ ဖော်ပြ၍မရသော အထိအခိုက်မခံသော စာသားများမရေးသားပါနှင့်။</p>
                    <p>Please do not enter sensitive information that cannot be published</p><hr>
                  <!-- Default input -->
                  <label for="inputDisabledEx2" class="disabled mt-2">အမည်, Name</label>
                  <input type="text" id="inputDisabledEx2" class="form-control" >
                  <!-- type -->
                  <label for="inputDisabledEx3" class="disabled mt-3 ">အမျိုးအစား, Type</label>
                  <select class="ll-select">
                    <option value="" disabled>Select</option>
                    <option value="0">Prayer</option>
                    <option value="1">Praise</option>
                  </select>
                  <!-- textarea -->
                  <label for="exampleFormControlTextarea5" class="disabled lable">ဆုတောင်းချက်, Text</label>
                    <textarea class="form-control" id="exampleFormControlTextarea5" rows="3"></textarea>
                  <!-- Sign in button -->
                  <button class="btn-pray" type="submit">Save</button>
                </form>
            </div>
            <div class="col-md-7">
              <h4 class="h mb-3 mt-5">ဆုတောင်းချက်များ</h4>
              <p>ဆုတောင်းချက်များကို သင်ကိုယ်တိုင်လည်းပါဝင် ဆုတောင်းပေးနိုင်ပါသည်။</p>
              <div class="table-wrapper-scroll-y my-custom-scrollbar mt-2">
              <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Text</th>
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
          <div class="row"></div>
        </div>
      </div>
        
      
@endsection