@extends('layouts.fullscreen')

@section('title')
Welcome to SourceAcademy 🎉
@endsection

@section('subtitle')
Great, now let's finish creating your account.
@endsection

@section('content')

<p class="description">All we need is a password. Choose something memorable!</p>

<form method="POST" action="">
	{{ csrf_field() }}

	<div class="field">
		<label class="label">Password:</label>
		<div class="control">
			<input class="input {{ $errors->has('password') ? 'is-danger' : null }}"
			type="password"
			name="password"
			placeholder="********"
			value="{{ old('password') }}"
			autofocus>
		</div>
		@if ($errors->has('password'))
			<p class="help is-danger">{{ $errors->first('password') }}</p>
		@endif
	</div>
	<div class="field">
		<label class="label">Confirm password:</label>
		<div class="control">
			<input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : null }}"
			type="password"
			name="password_confirmation"
			placeholder="********"
			value="{{ old('password_confirmation') }}">
		</div>
		@if ($errors->has('password_confirmation'))
			<p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
		@endif
	</div>

	<button class="button is-primary" type="submit" title="I have entered my password twice.">Good to go 🔒</button>
</form>

@endsection	