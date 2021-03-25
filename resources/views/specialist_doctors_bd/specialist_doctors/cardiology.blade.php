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
  	@include('specialist_doctors_bd.layout.newheader')

    <!--Starting Cardiologist Page-->
    <div class="container shadow-lg mb-2 mt-2 bg-white">
        <div class="row specialist-search">
            <p>Cardiologist</p>
        </div>
        <div class="row specialist-search">
            <span>Please enter city, state, zip or Doctor's name: </span>
            <form class="form-inline" action="#">
                    <!--<span class="fas fa-search p-2 search-icon"></span>-->
                
                    <input type="text" class="form-control ml-2" id="city-state" placeholder="City, State or Zip" name="city-state">
                    
                    <input type="text" class="form-control" id="name" placeholder="Doctor's Name" name="name">
    
                    <button type="submit" class="btn">Search</button>
            </form>
        </div>
    </div>  
    <!--Closing Cardiologist Page-->

    <!--Starting Available Doctors-->
    <div class="container shadow-lg mb-2 bg-white">
        <div class="row row-cols-2">
            <div class="col p-2 border-primary">
                Doctor 1

                @foreach($doctors as $doctor)
                    <p>Doctor ID: {{  $doctor->id }}</p>
                    <p>Doctor Name: {{  $doctor->name }}</p>
                    <p>Doctor Image: {{  $doctor->image }}</p>
                    
                    <img src="/image/Noyan_DP_Formal t64.jpg" alt="image">
                @endforeach
            </div>
        </div>

        <div class="row shadow-lg bg-white pagination pagination-lg justify-content-center">
            <div class="offset-3 col-6">
                <li class="page-item">{{$doctors->links()}}</li>
            </div>
        </div>
    </div>
    <!--Closing Available Doctors-->  

  	@include('specialist_doctors_bd.layout.footer')
  	<!--Closing HTML Code Area-->

  	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>