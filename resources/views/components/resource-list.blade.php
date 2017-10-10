<h2 class="subtitle">Resources:</h2>

@foreach($project->resources as $resource)

<hr>
<div class="resource">
	<h3 class="resource-title"><strong>{{ $resource->title }}</strong></h3>
	<p class="resource-content">{{ $resource->content }}</p>

	@isset($resource->link)
	<p>Link: <a href="{{ $resource->link }}" class="resource-link">{{ $resource->link }}</a></p>
	@endisset
</div>

@endforeach