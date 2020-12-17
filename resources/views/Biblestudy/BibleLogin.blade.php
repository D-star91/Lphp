<x-Studylayout>

    <div class="Log-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="log-form">
                        <h3 class="text-center">Login</h3>
                        <form action="{{route('biblelog')}}" method="POST">
                        @csrf
                            <div class="md-form">
                                <input type="email" id="inputMDEx" class="form-control" name="email">
                                <label for="inputMDEx">Email</label>
                            </div>
                                @error("useremail")
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            <div class="md-form">
                                <input type="password" id="inputMDEx" class="form-control" name="password">
                                <label for="inputMDEx">Password</label>
                            </div>
                                @error("userpassword")
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                @if(session("error"))
                                    <h3 class="text-danger">{{Session("error")}}</h3>
                                @endif
                            <button type="submit" class="btn btn-default btn btn-block mt-5">Login</button>
                            <p class="text-center mt-5">Not a member?
                                <a href="{{route('Biblesignup')}}">Register</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-Studylayout>