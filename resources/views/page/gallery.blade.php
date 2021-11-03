@extends('layouts.main')

@section('container')
<section id="home">
	<h2 class="text-center fw-bold mb-3">{{ $title }}</h2>
	
	<div class="row row-cols-1 row-cols-md-2 g-4">
		<div class="col">

			@include('page.photos')

		</div>
		<div class="col">
			<div class="ratio ratio-16x9">
				<iframe src="https://youtube.com/embed/vbDifPy4NGk" title="COMPANY PROFILE UPN 'VETERAN' JAWA TIMUR" allowfullscreen></iframe>
			</div>
		</div>
	</div>

</section>

@endsection
