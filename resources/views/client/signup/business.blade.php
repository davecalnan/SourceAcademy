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
			<input class="input {{ $errors->has('client_name') ? 'is-danger' : null }}"
			type="text"
			name="client_name"
			placeholder="Bravo Enterprises"
			value="{{ old('client_name') ? old('client_name') : Cookie::get('client_name') }}"
			autofocus>
		</div>
		@if ($errors->has('client_name'))
		<p class="help is-danger">{{ $errors->first('client_name') }}</p>
		@endif
	</div>
	
	<button class="button is-primary" type="submit" title="Yes, these details are correct.">Submit</button>
	<button class="button is-primary" title="Skip entering organisation">Skip Organisation</button>
</form>
@endsection