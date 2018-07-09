@extends('admin.master')

@section('meta-title')
Edit {{ $project->name }}
@endsection

@section('page-title')
Edit {{ $project->name }}
@endsection

@section('main')

<form method="POST" action="{{ route('projects.update', ['slug' => $project->slug]) }}">
	<input type="hidden" name="_method" value="PATCH">
	{{ csrf_field() }}

	<div class="field">
		<label class="label">Project Name</label>
		<div class="control">
			<input id="name" class="input {{ $errors->has('name') ? ' is-error' : '' }}" type="text" name="name" value="{{ $project->name }}" placeholder="Project Name" required autofocus>
		</div>
		@if ($errors->has('name'))
		<p class="help is-danger">{{ $errors->first('name') }}</p>
		@endif
	</div>

	<div class="field">
		<label class="label">Project Slug</label>
		<div class="control">
			<input id="slug" class="input {{ $errors->has('slug') ? ' is-error' : '' }}" type="text" name="slug" value="{{ $project->slug }}" placeholder="Project Slug" required>
		</div>
		@if ($errors->has('slug'))
		<p class="help is-danger">{{ $errors->first('slug') }}</p>
		@endif
	</div>

	<div class="field">
		<label class="label">Organisation ID</label>
		<div class="control">
			<input id="id" class="input {{ $errors->has('id') ? ' is-error' : '' }}" type="text" name="id" value="{{ $project->organisation["id"] }}" placeholder="123" required>
		</div>
		@if ($errors->has('id'))
		<p class="help is-danger">{{ $errors->first('id') }}</p>
		@endif
	</div>

	<div class="field">
		<div class="control">
			<button class="button is-primary" type="submit">Submit</button>
		</div>
	</div>
</form>

@endsection
