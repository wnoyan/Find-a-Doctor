@extends('specialist_doctors_bd.layout.master')

@section('content')
	
	<div class="container shadow-lg mb-2 bg-white body-speciality">
        <div class="text-primary row justify-content-center pb-2">
            <h4>Cities <!-- In New York -->, USA</h4>
        </div>

        <div class="row row-cols-3 pb-4">
            <div class="col-4">
            	@foreach($citys as $city)
                	<a href="#">{{ $city->name }}</a>
                @endforeach
            </div>
        </div>

    </div>
	
@endsection