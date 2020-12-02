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
                <a class="navbr-font-br mr-2" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
            </li>
          <li class="nav-item">
            <a class="navbr-font-br mr-2" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="navbr-font-br" href="#">Pricing</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item"><a class="nav-link waves-effect waves-light">
                <i class="fas fa-sign-in-alt"></i>
              </a>
            <li class="nav-item">
              <a class="navbr-font-br waves-effect mt-1" href="">
                SIGN UP
              </a>
            </li>
            <li class="nav-item">
              <a class="navbr-font-br waves-effect mt-1" href="">
                LOG IN
              </a>
            </li>
          </ul>
      </div>
  </div>
</nav>
<!--/.Navbar -->


    @yield("content")
</body>
</html>