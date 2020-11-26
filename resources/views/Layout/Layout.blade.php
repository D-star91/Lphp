<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyal</title>
    <link rel="stylesheet" href="/Style.css">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top blue-grey darken-4 scrolling-navbar">
  
    <div class="container">
    <a class="navbar-brand " href="#"><img src="{{asset('Image/loyallogo4.png')}}" height="50" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto ml-5">
          <li class="nav-item">
          <a class="navbr-font" href="{{route('home')}}">Home
            <span class="sr-only">(current)</span>
          </a>
          </li>
          <li class="nav-item">
          <a class=" navbr-font" href="{{route('bible')}}">Bible</a>
          </li>
          <li class="nav-item">
          <a class=" navbr-font" href="{{route('book')}}">Books</a>
          <li class="nav-item">
          <a class=" navbr-font" href="{{route('contact')}}">Contact</a>
          </li>
          <li class="nav-item">
          <a class=" navbr-font" href="{{route('about')}}">About</a>
          </li>
          </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Search</button>
          </form>
      </div>
    </div>
</nav>
<!--/.Navbar -->


    @yield("content")


<!-- footer -->
      <footer class="page-footer font-small special-color-dark pt-4">
        <div class="container">
          <div class="row">
            <!-- Image logo -->
            <div class="col col-lg-2">
              <img src="{{asset('Image/loyallogo3.png')}}" width="100px" height="100px" alt="">
            </div>
            <!-- Social button -->
            <div class="col">
              <h5 class="font-weight-bold text-uppercase mt-3 mb-2">Bible</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Old Testaments</a>
                  </li>
                  <li>
                    <a href="#!">New Testaments</a>
                  </li>
                  <li>
                    <a href="#!">Verse</a>
                  </li>
                </ul>
            </div>
            <div class="col">
              <h5 class="font-weight-bold text-uppercase mt-3 mb-2">Bible</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Old Testaments</a>
                </li>
                <li>
                  <a href="#!">New Testaments</a>
                </li>
                <li>
                  <a href="#!">Verse</a>
                </li>
              </ul>
           </div>
            <!-- Form -->
            <div class="col-6 col-md-auto list-social" >
              <form class="input-group" action="{{route('usermail')}}" method="post">
                @csrf
                <input type="text" class="form-control form-control-sm mr-2" placeholder="Your name"
                  aria-label="Your name" aria-describedby="basic-addon2" name="userName">
                <input type="email" class="form-control form-control-sm" placeholder="Your email"
                  aria-label="Your email" aria-describedby="basic-addon2" name="userEmail">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-outline-white my-0" type="submit">Subscribe</button>
                </div>
              </form>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
              @endif
                  @error("userName")
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                  @error("userEmail")
                      <p class="text-danger">{{$message}}</p>
                  @enderror
              <!-- Social -->
        <ul class="list-unstyled list-inline text-center mt-5">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-3">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-3">
              <i class="fab fa-twitter"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-3">
              <i class="fab fa-linkedin-in"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-3">
            <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-3">
            <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
          </div>
          </div>
        </div>
        <!-- copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href=""> loyalland.org</a>
        </div>
      </footer>

    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>