<h2 class="subtitle">New Project</h2>

<form method="POST" action="{{ route('projects.store') }}">
	{{ csrf_field() }}

	<div class="field">
		<label class="label">Project Name</label>
		<div class="control">
			<input id="name" class="input {{ $errors->has('name') ? ' is-error' : '' }}" type="name" name="name" value="{{ old('name') }}" placeholder="Project Name" required autofocus>
		</div>
		@if ($errors->has('name'))
		<p class="help is-danger">{{ $errors->first('name') }}</p>
		@endif
	</div>

	<div class="field">
		<div class="control">
			<button class="button is-primary" type="submit">Submit</button>
		</div>
	</div>
</form>
