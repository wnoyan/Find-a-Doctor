@extends('specialist_doctors_bd.layout.master')

@section('content')
	
	<div class="container shadow-lg mb-2 bg-white body-speciality">
        <div class="text-primary row justify-content-center pb-2">
            <h4>Doctor Categories By Locations</h4>
        </div>

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
    </div>
	
@endsection