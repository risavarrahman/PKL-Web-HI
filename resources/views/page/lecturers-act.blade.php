@extends('layouts.main')

@section('container')
<section id="home">
	<h2 class="text-center fw-bold mb-3">{{ $title }}</h2>
	
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead class="fw-bold text-center">
				<tr>
					<td>No.</td>
					<td>Name</td>
					<td>Activity</td>
					<td>Organizer</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($lectact as $la)
					<tr>
						<td>{{ $la->id }}</td>
						<td>{{ $la->name }}</td>
						<td>{{ $la->activity }}</td>
						<td>{{ $la->organizer }}</td>
					</tr>

				@endforeach
			</tbody>
		</table>
	</div>
	
	<div class="d-flex">

		{{ $lectact->links() }}
	</div>

</section>

@endsection








