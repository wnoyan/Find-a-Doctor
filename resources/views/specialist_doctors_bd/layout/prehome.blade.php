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
                              <a class="nav-link" href="#">Doctors</a>
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
                              <a class="nav-link" href="#">Doctor's Registration</a>
                            </li>
                          </ul>
                      </div>  
                </nav>
            </div>
        </div>
    </div>
    <!--Header Closing-->
      
    <!--Search Doctor Starting-->
    <div class="container shadow-lg mb-2 bg-white body-search">
        <p class="ml-2">Find The Best Doctor Right Fit For You
</p>
        <div class="row">
            <div class="col ml-2">
                <form class="form-inline" action="#">
                    <span class="fas fa-search p-2"></span>
                    
                    <input type="text" class="form-control" id="speciality" placeholder="Speciality" name="speciality">
                    
                    <input type="text" class="form-control" id="city-state" placeholder="City, State or Zip" name="city-state">
                    
                    <input type="text" class="form-control" id="name" placeholder="Doctor's Name" name="name">
    
                    <button type="submit" class="btn">Search</button>
                </form>
            </div>
        </div>
    </div>
    <!--Search Doctor Closing-->
      
    <!--Specialist Doctors Starting-->
    <div class="container shadow-lg mb-2 bg-white body-speciality">
        <h3>Specialist Doctors</h3>
        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">Allergy & Immunology</a>
            </div>
            <div class="col-3">
                <a href="#">Dermatology</a>
            </div>
            <div class="col-3">
                <a href="#">Gastroenterology</a>
            </div>
            <div class="col-3">
                <a href="#">Neuromedicine</a>
            </div>
        </div>
        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">Burn & Plastic</a>
            </div>
            <div class="col-3">
                <a href="#">ENT</a>
            </div>
            <div class="col-3">
                <a href="#">Hematology</a>
            </div>
            <div class="col-3">
                <a href="#">Oncology</a>
            </div>
        </div>
        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="/cardiology">Cardiology</a>
            </div>
            <div class="col-3">
                <a href="#">Family Medicine</a>
            </div>
            <div class="col-3">
                <a href="#">Infertility</a>
            </div>
            <div class="col-3">
                <a href="#">Urology</a>
            </div>
        </div>
    </div>
    <!--Specialist Doctors Starting-->
      
    <!--Select Area Starting-->
    <div class="container shadow-lg mb-2 bg-white body-area">
        <h3>Doctors By Location</h3>
        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">Atlana</a>
            </div>
            <div class="col-3">
                <a href="#">Dallas</a>
            </div>
            <div class="col-3">
                <a href="#">Miami</a>
            </div>
            <div class="col-3">
                <a href="#">San Diego</a>
            </div>
        </div>
        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">Boston</a>
            </div>
            <div class="col-3">
                <a href="#">Houston</a>
            </div>
            <div class="col-3">
                <a href="#">New Work</a>
            </div>
            <div class="col-3">
                <a href="#">Tucson</a>
            </div>
        </div>
        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">Chicago</a>
            </div>
            <div class="col-3">
                <a href="#">Los Angeles</a>
            </div>
            <div class="col-3">
                <a href="#">Phoenix</a>
            </div>
            <div class="col-3">
                <a href="#">Washington, DC</a>
            </div>
        </div>
    </div>
    <!--Select Area Closing-->
      
    <!--Videos Area Starting-->
    <div class="container shadow-lg mb-2 bg-white body-video">
        <h4 class="ml-2">VIDEOS
</h4>
        <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-xl-4">
            <div class="col-3">
                <iframe width="250" height="200" src="https://www.youtube.com/embed/M53Ug-OTOK8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                <p>Animation Video</p>
            </div>
            <div class="col-3">
                <iframe width="250" height="200" src="https://www.youtube.com/embed/M53Ug-OTOK8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                <p>Animation Video</p>
            </div>
            <div class="col-3">
                <iframe width="250" height="200" src="https://www.youtube.com/embed/M53Ug-OTOK8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                <p>Animation Video</p>
            </div>
            <div class="col-3">
                <iframe width="250" height="200" src="https://www.youtube.com/embed/M53Ug-OTOK8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
                <p>Animation Video</p>
            </div>
        </div>
    </div>
    <!--Videos Area Closing-->
    
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
  </body>
</html>