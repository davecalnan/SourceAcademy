<h2 class="subtitle">Projects:</h2>

<ul>
	@foreach($projects as $project)
	<li>
		<a href="/projects/{{ $project->slug }}">{{ $project->name }}</a>
	</li>
	@endforeach
</ul>