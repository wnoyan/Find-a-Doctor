@extends('specialist_doctors_bd.layout.master')

@section('content')

    <div class="container shadow-lg mb-2 bg-white">
        <div class="row text-success p-2">
        	<div class="col">
           		<h4 style="text-align:center;">Searching Result for Dr {{ $name }}</h4>
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