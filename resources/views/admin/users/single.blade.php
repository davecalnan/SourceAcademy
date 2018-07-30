@extends('admin.master')

@section('meta-title')
{{ $user->name }}
@endsection

@section('page-title')
User: {{ $user->name }}
@endsection

@section('main')

<card title="{{ $user->name }}">
	<form action="{{ route('users.update', [$id = $user->id ]) }}" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PATCH">

		<div class="field">
			<label class="label">Name</label>
			<div class="control">
				<input id="name" class="input {{ $errors->has('name') ? ' is-error' : '' }}" type="text" name="name" value="{{ old('name') !== null ? old('name') : $user->name }}" placeholder="Name" required>
			</div>
			@if ($errors->has('name'))
			<p class="help is-danger">{{ $errors->first('name') }}</p>
			@endif
		</div>
		
		<div class="field">
			<label class="label">Email</label>
			<div class="control">
				<input id="name" class="input {{ $errors->has('email') ? ' is-error' : '' }}" type="text" name="email" value="{{ old('email') !== null ? old('email') : $user->email }}" placeholder="email@email.com">
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
						<option value="customer"
							@if ($user->role === 'customer')
							selected
							@endif>
							Customer
						</option>
						<option value="freelancer"
							@if ($user->role === 'freelancer')
							selected
							@endif>
							Freelancer
						</option>
						<option value="admin"
							@if ($user->role === 'admin')
							selected
							@endif>
							Admin
						</option>
					</select>
				</div>
			</div>
			@if ($errors->has('role'))
			<p class="help is-danger">{{ $errors->first('role') }}</p>
			@endif
		</div>
		
		<div class="field">
			<div class="control">
				<button class="button is-primary" type="submit">Update</button>
			</div>
		</div>
	</form>

	<hr>
	<form action="{{ route('users.destroy', [$id = $user->id]) }}" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">

		<div class="field">
			<label class="label">Danger Zone</label>
			<div class="control">
				<button class="button is-danger" type="submit">Delete</button>
			</div>
		</div>
	</form>
</card>

@endsection
