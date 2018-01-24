<h2 class="subtitle">Projects:</h2>

@if(count($projects))
<ul>
	@foreach($projects as $project)
	<li>
		<a href="/projects/{{ $project->slug }}">{{ $project->name }}</a>
	</li>
	@endforeach
</ul>
@else
<p>No projects found. Let's find you some!</p>
@endif