@extends('specialist_doctors_bd.layout.master')

@section('content')

    <div class="container shadow-lg mb-2 p-2 bg-white">

    	<div class=" text-success p-2 mb-2">
        	@foreach($posts as $post)
	          		<p>Post ID: {{ $post->id }}</p>
	          		<p>Post Title: {{ $post->title }}</p>
	          	@foreach($post->tags as $tag)
	          		<p>Tag ID: {{ $tag->id }}</p>
	          		<p>Tag Name: {{ $tag->name }}</p>
	        	@endforeach
	        @endforeach
        </div>

    	<div class="row text-success p-2 mb-2">
        	<div class="col">
           		<h4 style="text-align:center;">Write Blog!</h4>
        	</div>
        </div>

	    <form action="{{ route('blog') }}" method="POST" enctype="multipart/form-data" class="was-validated">
	        {{ csrf_field() }}
	          
	        <div class="form-group">
	          <label for="title">Blog Title:</label>
	          <input type="text" class="form-control" id="title" placeholder="Ex: How to Live Long!" name="title" required>
	          <div class="valid-feedback">Valid.</div>
	          <div class="invalid-feedback">Please fill out this field.</div>
	        </div>

	        <!-- <div class="form-group">
	          <label for="">Category:</label>
	          <select class="form-control select2" name="category" required>
	          	@foreach($categories as $category)
	          		<option value="{{ $category->id }}">{{ $category->name }}</option>
	          	@endforeach
	          </select>
	          <div class="valid-feedback">Valid.</div>
	          <div class="invalid-feedback">Please fill out this field.</div>
	        </div> -->

	        <div class="form-group">
	        	<label for="category">Category:</label>
		        <input class="form-control" list="category" name="category" required>

				<datalist id="category">
				  <option value="Internet Explorer">
				  <option value="Firefox">
				  <option value="Chrome">
				  <option value="Opera">
				  <option value="Safari">
				</datalist>
			</div>

	        <div class="form-group">
	          <label for="">Tags:</label>
	          <select class="form-control select2-multi" name="tags[]" multiple required>
	          	@foreach($tags as $tag)
	          		<option value="{{ $tag->id }}">{{ $tag->name }}</option>
	          	@endforeach
	          </select>
	          <div class="valid-feedback">Valid.</div>
	          <div class="invalid-feedback">Please fill out this field.</div>
	        </div>

	        <button type="submit" class="btn btn-primary">Submit</button>

	    </form>

	</div>
@endsection

@section('scripts')
	<script>
		$('.select2').select2();
		$('.select2-multi').select2();
	</script>
@endsection