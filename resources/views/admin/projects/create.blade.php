<form method="POST" action="{{ route('projects.store') }}">
	{{ csrf_field() }}

	<div class="field">
		<label class="label">Client</label>
		<div class="control">
			<div class="select {{ $errors->has('type') ? ' is-error' : '' }}">
				<select name="client_id" required autofocus>
					<option value="" selected>Select a Client..</option>
					@foreach ($clients as $client)
					<option value="{{ $client->id }}"
						@if ($client->id == old('client_id'))
						selected
						@endif>{{ $client->name }}</option>
					@endforeach
				</select>
			</div>
		</div>
		@if ($errors->has('name'))
		<p class="help is-danger">{{ $errors->first('name') }}</p>
		@endif
	</div>

	<div class="columns">

		<div class="column">
			<div class="field">
				<label class="label">Project Name</label>
				<div class="control">
					<input id="name" class="input {{ $errors->has('name') ? ' is-error' : '' }}" type="text" name="name" value="{{ old('name') }}" placeholder="Project Name" required>
				</div>
				@if ($errors->has('name'))
				<p class="help is-danger">{{ $errors->first('name') }}</p>
				@endif
			</div>
		</div>

		<div class="column">
			<div class="field">
				<label class="label">Project Slug</label>
				<div class="control">
					<input id="name" class="input {{ $errors->has('slug') ? ' is-error' : '' }}" type="text" name="slug" value="{{ old('slug') }}" placeholder="projectslug">
				</div>
				@if ($errors->has('slug'))
				<p class="help is-danger">{{ $errors->first('slug') }}</p>
				@endif
			</div>
		</div>
	</div>

	<div class="field">
		<label class="label">Project Type</label>
		<div class="control">
			<div class="select {{ $errors->has('type') ? ' is-error' : '' }}">
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
