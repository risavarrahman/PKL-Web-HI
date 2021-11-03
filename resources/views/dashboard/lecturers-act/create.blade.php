@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Create New Lecturers Activities</h1>
</div>

<div class="col-lg-8">

	<form method="post" action="/dashboard/lecturers_act" class="mb-5">
		@csrf
		<div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
			@error('name')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="activity" class="form-label">Activity</label>
			<input type="text" class="form-control @error('activity') is-invalid @enderror" id="activity" name="activity" required value="{{ old('activity') }}">
			@error('activity')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="organizer" class="form-label">Organizer</label>
			<input type="text" class="form-control @error('organizer') is-invalid @enderror" id="organizer" name="organizer" required value="{{ old('organizer') }}">
			@error('organizer')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<button type="submit" class="btn btn-primary">Create Activity</button>
	</form>
</div>


@endsection