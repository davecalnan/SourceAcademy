@extends('layouts.fullscreen')

@section('title')
Welcome to SourceAcademy 🎉
@endsection

@section('subtitle')
@endsection

@section('content')

@if (session('status'))
<feedback class="is-{{ session('status') }}" content="{{ session('description') }}" call-to-action="Well done you.">
	<feedback-option slot="feedback-options" icon="😄" title="Happy"></feedback-option>
	<feedback-option slot="feedback-options" icon="❌" title="Close"></feedback-option>
</feedback>
@endif

@if (Cookie::has('project_type'))
<p class="description">It seems you are looking for help with a {{ Cookie::get('project_type') }}.</p>
@endif

<form method="POST" action="">
	{{ csrf_field() }}

	<div class="field">
		<label class="label">What do you want to call your project?</label>
		<div class="control">
			<input class="input {{ $errors->has('project') ? 'is-danger' : null }}"
			type="text"
			name="project"
			placeholder="SourceAcademy.co"
			value="{{ old('project') ? old('project') : Cookie::get('project') }}"
			autofocus>
		</div>
		@if ($errors->has('project'))
			<p class="help is-danger">{{ $errors->first('project') }}</p>
		@endif
	</div>

	<button class="button is-primary" type="submit" title="Let's get started.">Let's get started 📈</button>
</form>

@endsection	