@extends('student.master')

@section('content')
	
	@foreach($students as $student)
		<h3>Stuent Name: {{  $student->name }}</h3>
	@endforeach

@endsection