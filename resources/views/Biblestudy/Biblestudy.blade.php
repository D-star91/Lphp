@extends("Layout.Studylayout")
@section("content")

    <div class="Bible-bg">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-6">
                    <div class="form-bg">
                        <h3>Bible Study</h3>
                        <p>
                            နှုတ်ကပတ်တော်သည် သင်၏ဘဝအသက်တာအတွက် အကောင်းအဆုံးတည်ဆောက်ပေးနေမည်။ <br>
                            
                        </p>
                        <form action="{{route('studyacc')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control hig"  id="formGroupExampleInput" placeholder="Email Address" name="Biblemail">
                            </div>
                            <button type="submit" class="btn btn-default btn btn-block " >SIGN UP/LOGIN</button>
                        </form>
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