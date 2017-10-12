@extends('app')

@section('title', 'Project')

@section('header')
<h1 class="title">Project: {{ $project->name }}</h1>
@endsection

@section('main')

<section class="section has-border-bottom">
	@if(count($project->assets))
	@include('components.asset-list')
	@endif
</section>

<section class="section">
	@if(count($project->resources))
	@include('components.resource-list')
	@endif
</section>

@endsection

@section('footer')
@parent
@endsection