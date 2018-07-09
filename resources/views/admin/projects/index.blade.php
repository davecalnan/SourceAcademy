@extends('admin.master')

@section('meta-title', 'Projects')
@section('page-title', 'Projects')

@section('main')

<card title="Projects">
	<ul>
		@foreach ($projects as $project)
			<li><a href="{{ route('admin.projects.single', ['slug' => $project->slug]) }}">{{ $project->name }}</a></li>
		@endforeach
	</ul>
</card>

<card title="New Project">
	@include('admin.projects.create')
</card>

@endsection