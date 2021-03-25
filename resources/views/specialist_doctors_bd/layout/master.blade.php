<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Select 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
      
    <!--Our Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

    <title>Find Your Doctor</title>
  </head>
    
  <body>
    <!--Starting HTML Code Area-->
    
    <!--Header Starting-->
    <div class="container-fluid header mb-2">
        <div class="row header-title">
            <div class="offset-4 col-4">
                <p>Specialist Doctors USA</p>
            </div>
        </div>
        <div class="row header-navbar">
            <div class="col">
                <nav class="navbar navbar-expand-sm  justify-content-center">
                      <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Hospital</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/doctor">Doctors</a>
                            </li>
                              <li class="nav-item">
                              <a class="nav-link" href="#">Your Area</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Contact</a>
                            </li>
                              <li class="nav-item">
                              <a class="nav-link" href="/doctor-registration">Doctor's Registration</a>
                            </li>
                          </ul>
                      </div>  
                </nav>
            </div>
        </div>
    </div>
    <!--Header Closing-->
      
    <!-- Content Strating -->
    @yield('content')
    <!-- Content Closing -->
    
    <!--Footer Starting  -->
    <div class="container-fluid footer">
        <div class="row">
            <div class="col-3 bg-light ml-4">
                <div class="row">
                    <div class="col-3">
                        <a href="https://twitter.com/home"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="col-3">
                        <a href="https://web.facebook.com/wnoyan/"><i class="fa fa-facebook-f"></i></a>
                    </div>
                    <div class="col-3">
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="col-3">
                        <a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <nav class="navbar navbar-expand-sm justify-content-center">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Advertise</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Privacy Policy</a>
                        <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Donate</a>
                    </li>
                    </li>
                  </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--Footer Ending  -->
      
    <!--Closing HTML Code Area-->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Select 2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!-- Script Strating -->
    @yield('scripts')
    <!-- Script Closing -->
  </body>
</html>