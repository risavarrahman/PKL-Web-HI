@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Students Achievement</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success " role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive">
	<a href="/dashboard/students_ach/create" class="btn btn-primary mb-3">Create New Achievement</a>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Mahasiswa</th>
				<th scope="col">Nama Kegiatan</th>
				<th scope="col">Waktu Penyelenggaraan</th>
				<th scope="col">Tingkat</th>
				<th scope="col">Prestasi</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($students as $student)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $student->nama_mahasiswa }}</td>
				<td>{{ $student->nama_kegiatan }}</td>
				<td>{{ $student->waktu_penyelenggaraan }}</td>
				<td>{{ $student->tingkat }}</td>
				<td>{{ $student->prestasi }}</td>
				<td>
					<a href="/dashboard/students_ach/{{ $student->id }}/edit" class="badge bg-warning p-2"><span data-feather="edit"></span></a>

					<form action="/dashboard/students_ach/{{ $student->id }}" method="post" class="d-inline">
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