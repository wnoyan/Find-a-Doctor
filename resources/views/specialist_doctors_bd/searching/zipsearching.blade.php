@extends('specialist_doctors_bd.layout.master')

@section('content')
	
    <div class="container shadow-lg mb-2 bg-white">

        <div class="row text-success p-2">
        	<div class="col">
           		<h4 style="text-align:center;">Chambers in ZIP - {{ $zip }}</h4>
        	</div>
        </div>

        <div>
	    	<p class="text-primary ml-4"><strong>Chamber Locations</strong></p> <hr>

	    	@foreach($doctors as $chamber)
            	<p class="text-secondary ml-4"><strong>Chamber Name: </strong> <mark>{{  $chamber->chambername }}</mark></p>
            	<p class="text-secondary ml-4"><strong>Phone: </strong> <mark>{{  $chamber->telephone }}</mark></p>
            	<p class="text-secondary ml-4"><mark>{{  $chamber->zip }}, {{  $chamber->city }}</mark></p>
            	<p class="text-secondary ml-4"><mark>{{  $chamber->city }}, {{  $chamber->state }}</mark></p>
            	<p class="text-secondary ml-4"><strong>Accepting New Patients: </strong><mark>{{  $chamber->accepting }}</mark></p>

                <hr>

        	@endforeach
	    </div>

        <div class="row pagination justify-content-center">
            <li class="page-item">{{$doctors->links()}}</li>
        </div>

    </div>

@endsection