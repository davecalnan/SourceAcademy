@extends('layouts.app')

@section('title', 'Project')

@section('header')
<h1 class="app-header-title">Project: {{ $project->name }}</h1>
@endsection

@section('main')

<card>
	Thanks for creating your first project. We'll be in touch very shortly to arrange everything!
</card>

@endsection

@section('footer')
@parent
@endsection

@push('intercom.events')
	@include('intercom.events.user_views_a_project')
@endpush
