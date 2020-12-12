@extends("Layout.Studylayoutuser")
@section("content")

    <div class="Study-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="Study-title">
                        <h3 class="Study-title-h3">LOYAL BIBLE</h3>
                        <h4 class="Study-title-h4 mb-4">SCHOOL</h4>
                        <p class="Study-title-p my-4">
                            နှုတ်ကပတ်တော်သည် သင်၏ဘဝအသက်တာအတွက် အကောင်းအဆုံးတည်ဆောက်ပေးနေမည်။ <br>
                            
                        </p>
                        <a href="{{route('Biblelesson')}}" type="submit" class="btn-in mt-3" >Bible Lesson</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="BS-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="BS-p text-center">
                        <P><i class="fas fa-quote-left mr-2"></i>နှုတ်ကပတ်တော်သည် အကျွန်ုပ်ခြေရှေ့မှာ မီးခွက်ဖြစ်၍၊<br>အကျွန်ုပ်လမ်းခရီးကိုလင်းစေပါ၏။ <br> ဆာလံကျမ်း၊ ၁၁၉:၁၀၅</P>
                        <P><i class="fas fa-quote-left mr-2"></i>နှုတ်ကပတ်တော်ကို ဖွင့်ပြခြင်းသည် အလင်းကိုပေး၍၊ <br>မလိမ္မာသောသူတို့ကို လိမ္မာစေတတ်ပါ၏။ <br> ဆာလံကျမ်း၊ ၁၁၉:၁၃၀</P>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection