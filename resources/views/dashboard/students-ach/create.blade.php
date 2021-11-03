@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Create New Students Achievement</h1>
</div>

<div class="col-lg-8">

	<form method="post" action="/dashboard/students_ach" class="mb-5">
		@csrf
		<div class="mb-3">
			<label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
			<input type="text" class="form-control @error('nama_mahasiswa') is-invalid @enderror" id="nama_mahasiswa" name="nama_mahasiswa" required autofocus value="{{ old('nama_mahasiswa') }}">
			@error('nama_mahasiswa')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
			<input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" id="nama_kegiatan" name="nama_kegiatan" required autofocus value="{{ old('nama_kegiatan') }}">
			@error('nama_kegiatan')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="waktu_penyelenggaraan" class="form-label">Waktu Penyelenggaraan</label>
			<input type="date" class="form-control @error('waktu_penyelenggaraan') is-invalid @enderror" id="waktu_penyelenggaraan" name="waktu_penyelenggaraan" required value="{{ old('waktu_penyelenggaraan') }}">
			@error('waktu_penyelenggaraan')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label class="form-label" for="tingkat">Tingkat</label>
			<select class="form-select" id="tingkat" name="tingkat">
				<option value="Lokal">Lokal</option>
				<option value="Nasional">Nasional</option>
				<option value="Internasional">Internasional</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="prestasi" class="form-label">Prestasi</label>
			<input type="text" class="form-control @error('prestasi') is-invalid @enderror" id="prestasi" name="prestasi" required autofocus value="{{ old('prestasi') }}">
			@error('prestasi')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<button type="submit" class="btn btn-primary">Create Achievement</button>
	</form>
</div>


@endsection