<h2 class="subtitle">Resources:</h2>

<div class="columns">
	@foreach($project->resources as $resource)

	<div class="resource column is-one-third">
		<div class="card">

			@isset($resource->image)
			<div class="card-image">
				<img src="">
			</div>
			@endisset

			<header class="card-header">
				<p class="card-header-title">{{ $resource->title }}</p>
			</header>

			<div class="card-content">
				<p class="resource-content">{{ $resource->content }}</p>
			</div>

			@isset($resource->link)
			<footer class="card-footer">
				<a class="card-footer-item" href="{{ $resource->link }}" class="resource-link">{{ $resource->link }}</a>
			</footer>
			@endisset

		</div>
	</div>

	@endforeach
</div>