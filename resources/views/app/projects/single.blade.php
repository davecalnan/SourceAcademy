@extends('app')

@section('title', 'Project')

@section('header')
<h1 class="title">Project: {{ $project->name }}</h1>
@endsection

@section('main')

<section class="section has-border-bottom has-overflow-x-children">
	@include('components.asset-list')
</section>

<section class="section">
	@include('components.resource-list')
</section>

@endsection

@section('footer')
@parent
@endsection

@push('intercom.events')
	@include('intercom.events.user_views_a_project')
@endpush
