@extends('app.projects.single')

@section('main')

Admin

@if($project->resources)
<h2 class="subtitle">Resources:</h2>
<ul>
	@foreach($project->resources as $resource)
	<hr>
	<li>
		<h3><strong>{{ $resource->title }}</strong></h3>
		<p>{{ $resource->content }}</p>

		@isset($resource->link)
		<p>Link: <a href="{{ $resource->link }}">{{ $resource->link }}</a>.</p>
		@endisset
	</li>
	@endforeach
</ul>
@endif

<hr>

@include('admin.resources.create')

@endsection