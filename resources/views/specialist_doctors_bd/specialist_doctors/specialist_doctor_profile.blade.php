@extends('specialist_doctors_bd.layout.master')

@section('content')

	<div class="container shadow-lg bg-white mt-2 mb-2">
		<!-- Basic Infos -->
			<div class="row">
	        	<img class="rounded-circle m-3" src="{{ asset('image/doctor/' . $doctor->image) }}" style="width:15%; height:20%;" alt="Doctor Image">
	        	
	        	<div>
	        		<h4 class="text-primary m-4"><strong>{{  $doctor->drname }}</strong></h4>
	        		<p class="text-secondary ml-4"><strong>{{  $doctor->experience }} Years of Experience</strong></p>
	        		<p class="text-secondary ml-4"><strong>Accepting New Patients: {{  $doctor->accepting }}</strong></p>
	        	</div>
	        </div>

	        <hr>

	        <div>
	        	<p class="text-primary ml-4"><strong>About Dr. {{  $doctor->drname }}</strong></p>
	        	<div>
	        		<p class="ml-4" style="text-align:justify;">{{  $doctor->aboutdr }}</p>
	        	</div>
	        </div>
    	
    	<!-- Chamber Locations -->
		<div>
	    	<p class="text-primary ml-4"><strong>Chamber Locations</strong></p>

	    	@foreach($chambers as $chamber)
            	<p class="text-secondary ml-4"><strong>Chamber Name: </strong> <mark>{{  $chamber->chambername }}</mark></p>
            	<p class="text-secondary ml-4"><strong>Phone: </strong> <mark>{{  $chamber->telephone }}</mark></p>
            	<p class="text-secondary ml-4"><mark>{{  $chamber->zip }}, {{  $chamber->city }}</mark></p>
            	<p class="text-secondary ml-4"><mark>{{  $chamber->city }}, {{  $chamber->state }}</mark></p>
            	<p class="text-secondary ml-4"><strong>Accepting New Patients: </strong><mark>{{  $chamber->accepting }}</mark></p>
        	@endforeach
	    </div>

	    <hr>

	    <!-- Hospital Affliations -->
	    <div>
	    	<p class="text-primary ml-4"><strong>Hospital Affliations</strong></p>

	    	@foreach($hospitals as $hospital)
            	<p class="text-secondary ml-4"><strong>Hospital Name: </strong> <mark>{{  $hospital->hospitalname }}</mark></p>
            	<p><a class="text-secondary ml-4" style="text-decoration: none;" href="{{  $hospital->url }}"><strong>URL: </strong> <mark>{{  $hospital->url }}</mark></a></p>
        	@endforeach
	    </div>

	    <hr>

	    <!-- Education -->
	    <div>
	    	<p class="text-primary ml-4"><strong>Educations</strong></p>

	    	@foreach($educations as $education)
            	<p class="text-secondary ml-4"><strong>Institution Name: </strong> <mark>{{  $education->institution }}</mark></p>
            	<p class="text-secondary ml-4"><strong>Graduated in: </strong> <mark>{{  $education->gyear }}</mark></p>
        	@endforeach
	    </div>

	    <hr>

	    <!-- Insurances -->
	    <div>
	    	<p class="text-primary ml-4"><strong>Insurances</strong></p>

	    	@foreach($insurances as $insurance)
	    		<p class="text-secondary ml-4"><strong>Insurance Name: </strong> <mark>{{  $insurance->name }}</mark></p>
        	@endforeach
	    </div>

	    <hr>

	    <!-- Awards -->
	    <div class="pb-2">
	    	<p class="text-primary ml-4"><strong>Awards</strong></p>

	    	@foreach($awards as $award)
            	<p class="text-secondary ml-4"><strong>Award Name: </strong> <mark>{{  $award->name }}</mark></p>
            	<p class="text-secondary ml-4"><strong>Award Description: </strong> <mark>{{  $award->description }}</mark></p>
        	@endforeach
	    </div>

	</div>

@endsection