@extends('layouts.main')

@section('container')
<section id="home">
	<h2 class="text-center fw-bold mb-3">{{ $title }}</h2>
	
	<div class="table-responsive">
		<table class="table table-hover table-bordered ">
			<thead class="fw-bold text-center">
				<tr>
					<td>No.</td>
					<td>Nama Kegiatan</td>
					<td>Waktu Penyelenggaraan</td>
					<td>Tingkat</td>
					<td>Prestasi yang Dicapai</td>
				</tr>
			</thead>

			<tbody>

				@foreach ($studentach as $sa)
				<tr>
					<td>{{ $sa->id }}</td>
					<td>{{ $sa->nama_kegiatan }}</td>
					<td>{{ $sa->waktu_penyelenggaraan }}</td>
					<td>{{ $sa->tingkat }}</td>
					<td>{{ $sa->prestasi }}</td>
				</tr>

			@endforeach

			</tbody>
		</table>
	</div>

	<div class="d-flex">

		{{ $studentach->links() }}
	</div>

</section>

@endsection