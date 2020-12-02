<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loyal Land</title>
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
<body class="special-color-dark">
    <nav class="navbar navbar-dark teal lighten-4">
        <a class="navbr-font-sty" href="#">
            <img src="{{asset('Image/loyallogo4.png')}}" height="30" alt="mdb logo" class="mr-2 ml-5">Loyal Bible School
        </a>
    </nav>
    <!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark elegant-color">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="navbr-font-br mr-3" href="{{route('Biblestudy')}}">HOME
                  <span class="sr-only">(current)</span>
                </a>
            </li>
          <li class="nav-item">
            <a class="navbr-font-br mr-3" href="#">LESSON</a>
          </li>
          <li class="nav-item">
            <a class="navbr-font-br mr-3" href="#">CATALOG</a>
          </li>
          <li class="nav-item">
            <a class="navbr-font-br mr-3" href="#">FAQS</a>
          </li>
          <li class="nav-item">
            <a class="navbr-font-br mr-3" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="navbr-font-br mr-3" href="#">CONTACT US</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item"><a class="nav-link waves-effect waves-light">
                <i class="fas fa-sign-in-alt"></i>
              </a>
            <li class="nav-item">
              <a class="navbr-font-br waves-effect mt-1 mr-2" href="{{route('Biblesignup')}}">
                SIGN UP
              </a>
            </li>
            <li class="nav-item">
              <a class="navbr-font-br waves-effect mt-1" href="{{route('Biblelogin')}}">
                LOG IN
              </a>
            </li>
          </ul>
      </div>
  </div>
</nav>
<!--/.Navbar -->


    @yield("content")
       <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script  src="study.js"></script>
</body>
</html>