<h2 class="subtitle">Resources:</h2>

@if(count($resources))

<div class="columns is-multiline">
	@foreach($resources as $resource)

	@component('components.resource')

	@isset($resource->image)
		@slot('image')
		{{ $resource->image }}
		@endslot
	@endisset

	@slot('title')
	{{ $resource->title }}
	@endslot

	@slot('id')
	{{ $resource->id }}
	@endslot

	@slot('content')
	{{ $resource->content }}
	@endslot

	@slot('link')
	{{ $resource->link }}
	@endslot

	@endcomponent

	@endforeach
</div>

@else
<p>No resources found.</p>
@endif