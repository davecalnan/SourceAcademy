<p class="subtitle">Project users:</p>
@if(count($project->users))
<ul>
	@foreach($project->users as $user)
		<a href="/users/{{ $user->id }}">
			{{ $user->name }}
		</a>
		@unless($loop->last)
		 | 
		@endunless
	@endforeach
</ul>
@else
<p>No users found.</p>
@endif