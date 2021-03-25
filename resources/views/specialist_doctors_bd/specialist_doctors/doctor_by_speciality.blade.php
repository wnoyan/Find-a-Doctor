@extends('specialist_doctors_bd.layout.master')

@section('content')
	
	<div class="container shadow-lg mb-2 bg-white body-speciality">
        <div class="text-primary row justify-content-center pb-2">
            <h4>Specialist Doctor Categories</h4>
        </div>

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
                <a href="#">Oncology</a>
            </div>
            <div class="col-3">
                <a href="/category/Urology">Urology</a>
            </div>
        </div>
    </div>
	
@endsection