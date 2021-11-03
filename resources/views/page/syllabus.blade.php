
@extends('layouts.main')

@section('container')

<section id="accreditation">
	<div class="row">
		<div class="col">
			<h2 class="text-center fw-bold mb-3">{{ $title }}</h2>
		</div>
	</div>
	<div class="row justify-content-center" style="text-align: justify;">
		<div class="col-sm-8">

			<div class="accordion" id="accordionExample">
				@include('silabus.sem1')
				
				@include('silabus.sem2')
				
				@include('silabus.sem3')

				@include('silabus.sem4')

				@include('silabus.sem5')

				@include('silabus.sem6')

				@include('silabus.sem7')

			</div>

		</div>
	</div>
	
</section>
	
<section class="my-5">
</section>
@endsection