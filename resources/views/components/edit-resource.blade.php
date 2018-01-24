<h2 class="subtitle">Edit Resource</h2>

<form method="POST" action="{{ env('APP_URL') }}/resources/{{ $resource->id }}">
	<input type="hidden" name="_method" value="PATCH">
	{{ csrf_field() }}

	<div class="field">
		<label class="label">Resource Title</label>
		<div class="control">
			<input id="title" class="input {{ $errors->has('title') ? ' is-error' : '' }}" type="title" name="title" value="{{ $resource->title }}" placeholder="Helpful Resource" required autofocus>
		</div>
		@if ($errors->has('title'))
		<p class="help is-danger">{{ $errors->first('title') }}</p>
		@endif
	</div>

	<div class="field">
		<label class="label">Resource Content</label>
		<div class="control">
			<textarea id="content" class="input {{ $errors->has('content') ? ' is-error' : '' }}" type="content" name="content" placeholder="Content goes here..." required>{{ $resource->content }}</textarea>
		</div>
		@if ($errors->has('content'))
		<p class="help is-danger">{{ $errors->first('content') }}</p>
		@endif
	</div>

	<div class="field">
		<label class="label">Resource Link</label>
		<div class="control">
			<input id="link" class="input {{ $errors->has('link') ? ' is-error' : '' }}" type="link" name="link" value="{{ $resource->link }}" placeholder="https://website.com/resource">
		</div>
		<p class="help">Include an optional link to an external resource.</p>
		@if ($errors->has('link'))
		<p class="help is-danger">{{ $errors->first('link') }}</p>
		@endif
	</div>

	<div class="field">
		<div class="control">
			<button class="button is-primary" type="submit">Update</button>
		</div>
	</div>
</form>
