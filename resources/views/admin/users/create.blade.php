<form method="POST" action="{{ route('users.store') }}">
	{{ csrf_field() }}
	
	<div class="field">
		<label class="label">Name</label>
		<div class="control">
			<input id="name" class="input {{ $errors->has('name') ? ' is-error' : '' }}" type="text" name="name" value="{{ old('name') }}" placeholder="Name" required>
		</div>
		@if ($errors->has('name'))
		<p class="help is-danger">{{ $errors->first('name') }}</p>
		@endif
	</div>
	
	<div class="field">
		<label class="label">Email</label>
		<div class="control">
			<input id="name" class="input {{ $errors->has('email') ? ' is-error' : '' }}" type="text" name="email" value="{{ old('email') }}" placeholder="email@email.com">
		</div>
		@if ($errors->has('email'))
		<p class="help is-danger">{{ $errors->first('email') }}</p>
		@endif
	</div>
	
	<div class="field">
		<label class="label">Role</label>
		<div class="control">
			<div class="select {{ $errors->has('type') ? ' is-error' : '' }}">
				<select name="role" required>
					<option value="customer" selected>Customer</option>
					<option value="freelancer">Freelancer</option>
					<option value="admin">Admin</option>
				</select>
			</div>
		</div>
		@if ($errors->has('role'))
		<p class="help is-danger">{{ $errors->first('role') }}</p>
		@endif
	</div>
	
	<div class="field">
		<div class="control">
			<button class="button is-primary" type="submit">Create</button>
		</div>
	</div>
</form>
