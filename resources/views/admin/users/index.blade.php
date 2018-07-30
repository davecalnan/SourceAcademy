@extends('admin.master')

@section('meta-title', 'Users')
@section('page-title', 'Users')

@section('main')

<card title="Users">
	@if(count($users))
	<table class="table is-fullwidth is-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Projects</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td><a href="{{ route('admin.users.single', [$id = $user->id]) }}">{{ $user->name }}</a></td>
				<td>{{ $user->email }}</td>
				<td>{{ ucfirst($user->role) }}</td>
				<td>
					@forelse($user->projects as $project)
					<a href="{{ route('admin.projects.single', ['slug' => $project->slug]) }}">
						{{ $project->name }}
					</a>
					@unless($loop->last),@endunless
					@empty
					@endforelse
				</td>
				<td>
					<a href="{{ route('admin.users.single', [$id = $user->id]) }}" class="icon far fa-edit"></a>
					<form action="{{ route('users.destroy', [$id = $user->id]) }}" method="POST" style="display:inline">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						
						<button class="icon far fa-trash-alt"></button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@else
	<p>No users found.</p>
	@endif
</card>

<card title="Add a user">
	@include('admin.users.create')
</card>

@endsection
