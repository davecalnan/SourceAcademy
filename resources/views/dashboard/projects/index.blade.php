@extends('dashboard.master')

@section('meta-title', 'Projects List')
@section('page-title', 'Projects List')

@section('main')

<card title="Projects">
	<ul>
		@foreach ($projects as $project)
			<li><a href="{{ route('admin.projects.single', ['slug' => $project->slug]) }}">{{ $project->name }}</a></li>
		@endforeach
	</ul>
</card>

@endsection
