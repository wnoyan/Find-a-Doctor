@extends('specialist_doctors_bd.layout.master')

@section('content')
	
	<div class="container shadow-lg mb-2 bg-white body-speciality">
        <div class="text-primary row justify-content-center pb-2">
            <h4>Cities In New York, USA</h4>
        </div>

        <div class="row row-cols-3 pb-4">
            <div class="col-4">
                <a href="#">Albany</a>
            </div>
            <div class="col-4">
                <a href="#">Buffalo</a>
            </div>
            <div class="col-4">
                <a href="#">Mount</a>
            </div>
        </div>

        <div class="row row-cols-3 pb-4">
            <div class="col-4">
                <a href="/location/New York City">New York City</a>
            </div>
            <div class="col-4">
                <a href="#">Rochelle</a>
            </div>
            <div class="col-4">
                <a href="#">Rochester</a>
            </div>
        </div>

        <div class="row row-cols-3 pb-4">
            <div class="col-4">
                <a href="#">Schenectady</a>
            </div>
            <div class="col-4">
                <a href="#">Syracuse</a>
            </div>
            <div class="col-4">
                <a href="#">Utica</a>
            </div>
        </div>

        <div class="row row-cols-3 pb-4">
            <div class="col-4">
                <a href="#">Yonkers</a>
            </div>
            <!-- <div class="col-4">
                <a href="#">Syracuse</a>
            </div>
            <div class="col-4">
                <a href="#">Utica</a>
            </div> -->
        </div>

    </div>
	
@endsection