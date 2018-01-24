<form method="POST" action="{{ route('projects.store') }}">
	{{ csrf_field() }}

	<div class="field">
		<label class="label">Project Name</label>
		<div class="control">
			<input id="name" class="input {{ $errors->has('name') ? ' is-error' : '' }}" type="text" name="name" value="{{ old('name') }}" placeholder="Project Name" required autofocus>
		</div>
		@if ($errors->has('name'))
		<p class="help is-danger">{{ $errors->first('name') }}</p>
		@endif
	</div>

	<div class="field">
		<label class="label">Project Type</label>
		<div class="control">
			<div class="select {{ $errors->has('name') ? ' is-error' : '' }}">
				<select name="type" required>
					<option value="wordpress_basic" selected>Wordpress Basic</option>
					<option value="shopify_basic">Shopify Basic</option>
				</select>
			</div>
		</div>
	</div>

	<div class="field">
		<div class="control">
			<button class="button is-primary" type="submit">Create</button>
		</div>
	</div>
</form>
