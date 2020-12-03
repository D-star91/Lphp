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
                            <button type="submit" class="btn btn-default btn btn-block" >SIGN UP/LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row"></div>
            <div class="row"></div>
        </div>
    </div>
@endsection