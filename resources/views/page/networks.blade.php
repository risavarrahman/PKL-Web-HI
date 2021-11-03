@extends('layouts.main')

@section('container')
<section id="home">
	<h2 class="text-center fw-bold mb-3">{{ $title }}</h2>
	<div class="table-responsive">
		<table class="table table-hover table-bordered ">
			<thead class="fw-bold text-center">
				<tr>
					<td>No.</td>
					<td>Starting Date</td>
					<td>Ending Date</td>
					<td>First Party</td>
					<td>Second Party</td>
					<td>Status</td>
					<td>Partner Type</td>
					<td>Agreement Type</td>
				</tr>
			</thead>
			
			<tbody>
				@foreach ($networks as $net)
				<tr>
					<td>{{ $net->id }}</td>
					<td>{{ $net->starting_date }}</td>
					<td>{{ $net->ending_date }}</td>
					<td>{{ $net->first_party }}</td>
					<td>{{ $net->second_party }}</td>
					<td>{{ $net->status }}</td>
					<td>{{ $net->partner_type }}</td>
					<td>{{ $net->agreement_type }}</td>
				</tr>

			@endforeach

			</tbody>
		</table>
	</div>

	<div class="d-flex">

		{{ $networks->links() }}
	</div>
</section>

@endsection


{{-- @foreach ($lecturersAct as $la)
	<tr>
		<td>{{ $la->id }}</td>
		<td>{{ $la->name }}</td>
		<td>{{ $la->activity }}</td>
		<td>{{ $la->organizer }}</td>
	</tr>

@endforeach --}}