@extends('admin.master')

@section('meta-title')
{{ $project->name }}
@endsection

@section('page-title')
Project: {{ $project->name }}
<a href="{{ route('admin.projects.edit', ['slug' => $project->slug]) }}">(Edit)</a>
@endsection

@section('main')

<card title="Customer: {{ $organisation->name }}">
	
</card>
<card title="Users">
	@include('components.user-list')
</card>

@endsection

@section('footer')
@parent
@endsection
