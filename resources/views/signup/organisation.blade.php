@extends('layouts.fullscreen')

@section('title')
About your Organisation 💼
@endsection

@section('subtitle')
Please provide a few details about your organisation.
@endsection

@section('content')
<form method="POST" action="">
	{{ csrf_field() }}

	<div class="field">
		<label class="label">Organisation Name:</label>
		<div class="control">
			<input class="input {{ $errors->has('organisation_name') ? 'is-danger' : null }}"
			type="text"
			name="organisation_name"
			placeholder="Bravo Enterprises"
			value="{{ old('organisation_name') ? old('organisation_name') : Cookie::get('organisation_name') }}"
			autofocus>
		</div>
		@if ($errors->has('organisation_name'))
		<p class="help is-danger">{{ $errors->first('organisation_name') }}</p>
		@endif
	</div>
	
	<button class="button is-primary" type="submit" title="Yes, these details are correct.">Submit</button>`
</form>
@endsection