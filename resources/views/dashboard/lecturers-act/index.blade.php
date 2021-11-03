@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Lecturers Activities</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success " role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive">
	<a href="/dashboard/lecturers_act/create" class="btn btn-primary mb-3">Create New Activities</a>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Name</th>
				<th scope="col">Activity</th>
				<th scope="col">Organizer</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($lectacts as $la)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $la->name }}</td>
				<td>{{ $la->activity }}</td>
				<td>{{ $la->organizer }}</td>
				<td>
					<a href="/dashboard/lecturers_act/{{ $la->id }}/edit" class="badge bg-warning p-2"><span data-feather="edit"></span></a>

					<form action="/dashboard/lecturers_act/{{ $la->id }}" method="post" class="d-inline">
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