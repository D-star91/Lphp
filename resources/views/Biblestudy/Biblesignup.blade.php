<x-Studylayout>

    <div class="Log-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="log-form">
                        <h3 class="text-center">REGISTER</h3>
                        <form action="{{route('biblesig')}}" method="POST">
                        @csrf
                            <div class="md-form">
                                <input type="text" id="inputMDEx" class="form-control" name="username">
                                <label for="inputMDEx">Username</label>
                            </div>
                                @error("username")
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            <div class="md-form">
                                <input type="email" id="inputMDEx" class="form-control" name="useremail">
                                <label for="inputMDEx">Email</label>
                            </div>
                                @error("useremail")
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            <div class="md-form">
                                <input type="password" id="inputMDEx" class="form-control" name="userpassword">
                                <label for="inputMDEx">Password</label>
                            </div>
                                @error("userpassword")
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            {{-- <div class="md-form">
                                <input type="password" id="inputMDEx" class="form-control" name="Userconfipass">
                                <label for="inputMDEx">Confirm Password</label>
                            </div>
                                @error("Userconfipass")
                                    <p class="text-danger">{{$message}}</p>
                                @enderror --}}
                            <button type="submit" class="btn btn-default btn btn-block mt-5">REGISTER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-Studylayout>