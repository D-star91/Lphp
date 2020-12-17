<x-Layout>

    
    <div class="Testpost">
        <div class="container">
            <nav class="navbar navbar-light ">
                <span class="navbar-brand">သက်သေခံချက်တင်ရန်</span>
                <a class="btn btn-default btn-sm mr-auto" role="button" aria-pressed="true" href="{{route('Testimony')}}">send</a>
            </nav>
            <div class="row">
                
            </div>
            <div class="row">
                @foreach($Testposts as $Testpost)
                <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-body elegant-color white-text rounded-bottom">
                            <!-- Title -->
                            <h4 class="card-title">{{$Testpost['name']}}</h4>
                            <hr >
                            <p>{{$Testpost['testimony']}}</p>
                            <!-- Link -->
                        </div>
                    </div> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="testpost">
        <div class="container">

        </div>
    </div>

</x-Layout>