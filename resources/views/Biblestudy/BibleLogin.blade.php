@extends("Layout.Studylayout")
@section("content")

    <div class="Log-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="log-form">
                        <h3 class="text-center">Login</h3>
                        <form action="">
                            <div class="md-form">
                                <input type="email" id="inputMDEx" class="form-control">
                                <label for="inputMDEx">Email</label>
                            </div>
                            <div class="md-form">
                                <input type="password" id="inputMDEx" class="form-control">
                                <label for="inputMDEx">Password</label>
                            </div>
                            <button type="submit" class="btn btn-default btn btn-block mt-5">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection