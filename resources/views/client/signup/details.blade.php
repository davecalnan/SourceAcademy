@extends('layouts.fullscreen')

@section('title')
Welcome to SourceAcademy 🎉
@endsection

@section('subtitle')
Before we get started - just a few quick details.
@endsection

@section('content')

@if(Cookie::has('name'))
<p class="description">We've filled in some details from your personalised link. Edit these if needed and click the button below.</p>
@endif

<form method="POST" action="">
	{{ csrf_field() }}

	@if (Cookie::has('type'))
	<input type="hidden"
		name="type"
		value="{{ Cookie::get('type') }}"
		>
	@endif

	<input type="hidden" name="role" value="client">

	<div class="field">
		<label class="label">Name:</label>
		<div class="control">
			<input class="input {{ $errors->has('name') ? 'is-danger' : null }}"
			type="text"
			name="name"
			placeholder="Johnny Bravo"
			@if (Auth::user())
			value="{{ Auth::user()->name }}"
			@else
			value="{{ old('name') ? old('name') : Cookie::get('name') }}"
			@endif
			autofocus>
		</div>
		@if ($errors->has('name'))
		<p class="help is-danger">{{ $errors->first('name') }}</p>
		@endif
	</div>

	<div class="field">
		<label class="label">Contact email:</label>
		<div class="control is-error">
			<input class="input {{ $errors->has('email') ? 'is-danger' : null }}"
			type="email"
			name="email"
			placeholder="jbravo@heyprettymama.com"
			@if (old('email'))
			value="{{ old('email') }}"
			@else
			value="{{ Auth::user() ? Auth::user()->email : Cookie::get('email') }}"
			@endif>
		</div>
		@if ($errors->has('email'))
		<p class="help is-danger">{{ $errors->first('email') }}</p>
		@endif
	</div>

	<button class="button is-primary" type="submit" title="Yes, these details are correct.">Looks good 👍</button>
</form>

@endsection	