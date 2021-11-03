@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Networks</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success " role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive">
	<a href="/dashboard/networks/create" class="btn btn-primary mb-3">Create Networks</a>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Starting Date</th>
				<th scope="col">Ending Date</th>
				<th scope="col">First Party</th>
				<th scope="col">Second Party</th>
				<th scope="col">Status</th>
				<th scope="col">Partner Type</th>
				<th scope="col">Agreement Type</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($networks as $network)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $network->starting_date }}</td>
				<td>{{ $network->ending_date }}</td>
				<td>{{ $network->first_party }}</td>
				<td>{{ $network->second_party }}</td>
				<td>{{ $network->status }}</td>
				<td>{{ $network->partner_type }}</td>
				<td>{{ $network->agreement_type }}</td>
				<td>
					<a href="/dashboard/networks/{{ $network->id }}/edit" class="badge bg-warning p-2"><span data-feather="edit"></span></a>

					<form action="/dashboard/networks/{{ $network->id }}" method="post" class="d-inline">
						@method('delete')
						@csrf
						<button class="badge bg-danger border-0 p-2" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
					</form>
				</td>
			</tr>
			@endforeach
			
			
		</tbody>
	</table>
</div>


@endsection