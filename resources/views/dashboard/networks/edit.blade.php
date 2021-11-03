@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Edit Networks</h1>
</div>

<div class="col-lg-8">

	<form method="post" action="/dashboard/networks/{{ $network->id }}" class="mb-5">
		@method('put')
		@csrf
		<div class="mb-3">
			<label for="starting_date" class="form-label">Starting Date</label>
			<input type="date" class="form-control @error('starting_date') is-invalid @enderror" id="starting_date" name="starting_date" required value="{{ old('starting_date', $network->starting_date) }}">
			@error('starting_date')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="ending_date" class="form-label">Ending Date</label>
			<input type="date" class="form-control @error('ending_date') is-invalid @enderror" id="ending_date" name="ending_date" required value="{{ old('ending_date', $network->ending_date) }}">
			@error('ending_date')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="first_party" class="form-label">First Party</label>
			<input type="text" class="form-control @error('first_party') is-invalid @enderror" id="first_party" name="first_party" required value="{{ old('first_party', $network->first_party) }}">
			@error('first_party')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label for="second_party" class="form-label">Second Party</label>
			<input type="text" class="form-control @error('second_party') is-invalid @enderror" id="second_party" name="second_party" required value="{{ old('second_party', $network->second_party) }}">
			@error('second_party')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
		<div class="mb-3">
			<label class="form-label" for="status">Status</label>
			<select class="form-select" id="status" name="status">
				<option value="Active">Active</option>
				<option value="Inactive">Inactive</option>
			</select>
		</div>
		<div class="mb-3">
			<label class="form-label" for="partner_type">Partner type</label>
			<select class="form-select" id="partner_type" name="partner_type">
				<option value="Local Industry">Local Industry</option>
				<option value="International University">International University</option>
			</select>
		</div>
		<div class="mb-3">
			<label class="form-label" for="agreement_type">Agreement Type</label>
			<select class="form-select" id="agreement_type" name="agreement_type">
				<option value="Memorandum of Understanding">Memorandum of Understanding</option>
				<option value="Memorandum of Agreement">Memorandum of Agreement</option>
				<option value="Implementation Arrangement">Implementation Arrangement</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Update Networks</button>
	</form>
</div>


@endsection