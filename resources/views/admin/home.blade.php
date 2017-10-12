@extends('app')

@section('title', 'Admin Home')

@section('header')
<p class="title">Admin Home</p>
@endsection

@section('main')

<p class="title is-5">Users</p>

@if($users)
<table class="table is-fullwidth is-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>
				@forelse($user->roles as $role)
				{{ title_case($role->name) }}
				@empty
			</td>
			<td></td>
			@endforelse
		</tr>
		@endforeach
	</tbody>
</table>
@else
<p>No users found.</p>
@endif

@endsection

@section('footer')
@parent
@endsection