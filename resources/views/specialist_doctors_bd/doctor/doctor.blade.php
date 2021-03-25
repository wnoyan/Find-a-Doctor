@extends('specialist_doctors_bd.layout.master')

@section('content')
	<div class="container shadow-lg p-2 mb-2 bg-white">
        <div class="row text-success p-2">
        	<div class="col">
           		<h4 style="text-align:center;">All Registered Doctors</h4>
        	</div>
        </div>

        <div class="row">
            <div class="col table-responsive">
           		<table class="table table-hover table-dark">
				  <thead>
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Image</th>
				      <th scope="col">Name</th>
				      <th scope="col">Speciality</th>
				      <th scope="col">State</th>
				      <th scope="col">City</th>
				      <th scope="col">Experience</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($doctors as $doctor)
				    <tr>
				      <th> {{ $doctor->drid }} </th>
				      <th> <img src="{{ asset('image/doctor/' . $doctor->image) }}" width="100px;" height="10px;" alt="Doctor Image"> </th>
				      <th> {{ $doctor->drname }} </th>
				      <th> {{ $doctor->mainspeciality }} </th>
				      <th> {{ $doctor->state }} </th>
				      <th> {{ $doctor->city }} </th>
				      <th> {{ $doctor->experience }} </th>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
        	</div>
        </div>
        <div class="row pagination pagination-lg justify-content-center">
            <div >
                <li class="page-item">{{ $doctors->links() }}</li>
            </div>
        </div>

    </div>
@endsection