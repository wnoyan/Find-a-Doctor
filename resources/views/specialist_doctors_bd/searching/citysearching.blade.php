@extends('specialist_doctors_bd.layout.master')

@section('content')

    <div class="container shadow-lg mb-2 bg-white">
        <div class="row text-success p-2">
        	<div class="col">
           		<h4 style="text-align:center;">Searching Result for {{ $city }}</h4>
        	</div>
        </div>

    <div class="container shadow-lg mb-2 bg-white body-search" id="accordion">
        <div class="card">
        <div class="card-header">
            <!-- <a class="card-link text-primary" data-toggle="collapse" href="#collapseOne"><p style="text-align:center;"><strong>Find The Best Doctor Right Fit For You</strong></p></a> -->

            <a class="card-link text-primary" data-toggle="collapse" href="#collapseOne"><p style="text-align:center;"><span class="fas fa-search p-2"></span> Search Doctors</p></a>
        </div>

        <div id="collapseOne" class="collapse " data-parent="#accordion">
            <div class="card-body">

            <!-- Namewise searching -->
            <form class="form-inline justify-content-center mb-2" action="/citynamesearching" method="GET" enctype="multipart/form-data">
                {{ csrf_field() }}

                <span class="fas fa-search p-2"></span>
                <input type="text" class="form-control" id="city" name="city" value="{{ $city }}" readonly>

                <!-- <span class="fas fa-search p-2"></span> -->
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>

                <button type="submit" class="btn">Search</button>
            </form>

            <!-- Specialitywise searching -->
            <form class="form-inline justify-content-center mb-2" action="/cityspecialitysearching" method="GET" enctype="multipart/form-data">
                {{ csrf_field() }}

                <span class="fas fa-search p-2"></span>
                <input type="text" class="form-control" id="city" name="city" value="{{ $city }}" readonly>

                <!-- <span class="fas fa-search p-2"></span> -->
                <input type="text" class="form-control" id="speciality" placeholder="Speciality" name="speciality" required>

                <button type="submit" class="btn">Search</button>
            </form>

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


        <div class="row row-cols-2 mb-2">

        	@foreach($doctors as $doctor)

            <div class="col mb-3">
            	<div class="card">
    				<img class="card-img-top rounded-circle mx-auto" src="{{ asset('image/doctor/' . $doctor->image) }}" style="width:50%; height:40%;" alt="Doctor Image">

    				<div class="card-body mx-auto">
                    	<p class="card-title">Doctor Name: {{  $doctor->drname }}</p>
                    	<p class="card-text">Doctor ID: {{  $doctor->id }}</p>
      					
      					<a href="{{ route('specialist_doctor_profile',$doctor->id) }}" class="btn btn-primary stretched-link">See Profile</a>
    				</div>
  				</div>
  			</div>

            @endforeach

        </div>
        

        <div class="row pagination justify-content-center">
            <li class="page-item">{{$doctors->links()}}</li>
        </div>
    </div>

@endsection