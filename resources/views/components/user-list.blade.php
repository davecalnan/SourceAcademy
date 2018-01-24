<p class="subtitle">Users</p>
@if(count($users))
<table class="table is-fullwidth is-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Projects</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>
			@forelse($user->roles as $role)
				{{ title_case($role->name) }}@unless($loop->last),@endunless
				@empty
			</td>
			@endforelse
			<td>
			@forelse($user->projects as $project)
				{{ $project->name }}@unless($loop->last),@endunless
				@empty
			@endforelse
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
<p>No users found.</p>
@endif