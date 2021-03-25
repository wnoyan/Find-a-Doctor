@extends('specialist_doctors_bd.layout.master')

@section('content')
    
    <!--Search Doctor Starting-->
    <div class="container shadow-lg mb-2 bg-white body-search" id="accordion">
        <div class="card">
        <div class="card-header">
            <!-- <a class="card-link text-primary" data-toggle="collapse" href="#collapseOne"><p style="text-align:center;"><strong>Find The Best Doctor Right Fit For You</strong></p></a> -->

            <a class="card-link text-primary" data-toggle="collapse" href="#collapseOne"><p style="text-align:center;"><span class="fas fa-search p-2"></span> Search Doctors</p></a>
        </div>

        <div id="collapseOne" class="collapse " data-parent="#accordion">
            <div class="card-body">

            <!-- Searching in a group -->
            <form class="form-inline justify-content-center mb-2" action="/groupsearching" method="GET" enctype="multipart/form-data">
                {{ csrf_field() }}

                <span class="fas fa-search p-2"></span>
                <!-- <input type="text" class="form-control" id="name" placeholder="Name" name="name" required> -->
                <input type="text" class="form-control" id="speciality" placeholder="Speciality" name="speciality" required>
                <input type="text" class="form-control" id="city" placeholder="City" name="city" required>
                <!-- <input type="text" class="form-control" id="zip" placeholder="ZIP" name="zip" required> -->

                <button type="submit" class="btn">Search</button>
            </form>

            <!-- Namewise searching -->
            <form class="form-inline justify-content-center mb-2" action="/namesearching" method="GET" enctype="multipart/form-data">
                {{ csrf_field() }}

                <span class="fas fa-search p-2"></span>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>

                <button type="submit" class="btn">Search</button>
            </form>

            <!-- Specialitywise searching -->
            <form class="form-inline justify-content-center mb-2" action="/spesearching" method="GET" enctype="multipart/form-data">
                {{ csrf_field() }}

                <span class="fas fa-search p-2"></span>
                <input type="text" class="form-control" id="speciality" placeholder="Speciality" name="speciality" required>

                <button type="submit" class="btn">Search</button>
            </form>

            <!-- Citywise searching -->
            <form class="form-inline justify-content-center mb-2" action="/citysearching" method="GET" enctype="multipart/form-data">
                {{ csrf_field() }}

                <span class="fas fa-search p-2"></span>
                <input type="text" class="form-control" id="city" placeholder="City" name="city" required>

                <button type="submit" class="btn">Search</button>
            </form>

            <!-- Zipwise searching -->
            <!-- Making on One Line -->
            <!-- <li>
                <form class="form-inline justify-content-center mb-2" action="/zipsearching" method="GET" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <span class="fas fa-search p-2"></span>
                    <input type="text" class="form-control" id="zip" placeholder="ZIP" name="zip" required>

                    <button type="submit" class="btn">Search</button>
                </form>
            </li> -->

            <form class="form-inline justify-content-center mb-2" action="/zipsearching" method="GET" enctype="multipart/form-data">
                {{ csrf_field() }}

                <span class="fas fa-search p-2"></span>
                <input type="text" class="form-control" id="zip" placeholder="ZIP" name="zip" required>

                <button type="submit" class="btn">Search</button>
            </form>

                </div>
            </div>
        </div>
    </div>
	<!--Search Doctor Closing-->
   
      
    <!--Specialist Doctors Starting-->
    <div class="container shadow-lg mb-2 bg-white body-speciality">
        <h4 class="text-primary mb-4">Specialist Doctor Categories</h4>

        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">Allergy & Immunology</a>
            </div>
            <div class="col-3">
                <a href="#">Burn & Plastic</a>
            </div>
            <div class="col-3">
                <a href="/category/Cardiology">Cardiology</a>
            </div>
            <div class="col-3">
                <a href="#">Dermatology</a>
                
            </div>
        </div>
        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">ENT</a>
            </div>
            <div class="col-3">
                <a href="#">Family Medicine</a>
            </div>
            <div class="col-3">
                <a href="#">Gastroenterology</a>
            </div>
            <div class="col-3">
                <a href="#">Hematology</a>
            </div>
        </div>
        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">Infertility</a>
            </div>
            <div class="col-3">
                <a href="#">Neuromedicine</a>
            </div>
            <div class="col-3">
                <a href="/category/Oncology">Oncology</a>
            </div>
            <!-- <div class="col-3">
                <a href="/urology">Urology</a>
            </div> -->
            <div class="col-3">
                <a href="/category/Urology">Urology</a>
            </div>
        </div>
        <div class="row justify-content-center pb-2">
            <a href="/doctor_by_speciality">See More Categories</a>
        </div>
    </div>
    <!--Specialist Doctors Starting-->
      
    <!--Select Area Starting-->
    <div class="container shadow-lg mb-2 bg-white body-area">
        <h4 class="text-primary mb-4">Doctors By Location</h4>

        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">Atlana</a>
            </div>
            <div class="col-3">
                <a href="#">Boston</a>
            </div>
            <div class="col-3">
                <a href="#">Chicago</a>
            </div>
            <div class="col-3">
                <a href="#">Dallas</a>
                
            </div>
        </div>
        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">Houston</a>
            </div>
            <div class="col-3">
                <a href="#">Los Angeles</a>
            </div>
            <div class="col-3">
                <a href="#">Miami</a>
            </div>
            <div class="col-3">
                <a href="/New_York">New York</a>
                <!-- <a href="/generalstate">New York</a> -->
            </div>
        </div>
        <div class="row row-cols-4 pb-4">
            <div class="col-3">
                <a href="#">Phoenix</a>
            </div>
            <div class="col-3">
                <a href="#">San Diego</a>
            </div>
            <div class="col-3">
                <a href="#">Tucson</a>
            </div>
            <div class="col-3">
                <a href="#">Washington, DC</a>
            </div>
        </div>
        
        <div class="row justify-content-center pb-2">
            <a href="/doctor_by_location">See More Locations</a>
        </div>
    </div>
    <!--Select Area Closing-->
      
    <!--Videos Area Starting-->
    <div class="container shadow-lg mb-2 bg-white body-video">
        <h4 class="ml-2">VIDEOS</h4>
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
	
@endsection