@extends("Layout.Layout")
@section("content")

    <div class="Testimony">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="test-titel">သက်သေခံချက်</h3>
                    <hr class="hr-2">
                    <p class="test-p">သက်သေခံချက်ရေးသားရာတွင် ပြန်လည်၍ဝေမျှနိုင်သော စကားလုံးများကိုသာ ကျေးဇူးပြု၍ ရေးသားပေးပါ။</p>
                    <hr>
                    @if(Session('success'))
                        <div class="text-center mt-2">
                            {{Session('success')}}
                        </div>   
                    @endif
                        <form class="test-form" action="{{route('Testimony_post')}}" method="POST">
                            @csrf
                            <div class="form-group col-4">
                                <label for="exampleForm2">အမည်/Name</label>
                                <input type="text" id="exampleForm2" class="form-control" name="name">  
                                @error("name")
                                    <p class="text-danger" >ကျေးဇူးပြု၍အမည်ရေးထည့်ပေးပါ။</p>
                                @enderror
                            </div>
                            <div class="form-group col-10">
                                <label for="exampleFormControlTextarea3">သက်သေခံချက်ရေးရန်/Testimony</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" name="testimony"></textarea>
                                @error("testimony")
                                    <p class="text-danger" >ကျေးဇူးပြု၍သက်သေခံချက်ရေးထည့်ပေးပါ။</p>
                                @enderror
                            </div>
                            <div class="col-8 text-center">
                                <button type="submit" class="btn-in ">Send</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection