@if(count($projects))
<table class="table is-fullwidth is-striped">
	<thead>
		<tr>
			<th>Project Name</th>
			<th>Organisation</th>
			<th>Users</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($projects as $project)
		<tr>
			<td>{{ $project->name }}</td>
			<td>{{ $project->organisation["name"] }}</td>
			<td>
			@forelse($project->users as $user)
				{{ $user->name }}@unless($loop->last),@endunless
				@empty
			</td>
			@endforelse
		</tr>
		@endforeach
	</tbody>
</table>
@else
<p>No projects found.</p>
@endif