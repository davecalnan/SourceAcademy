@extends('app')

@section('title', isset($title) ? $title : 'Projects')

@section('header')

<h1 class="title">
	@if(isset($title))
	{{ $title }}
	@else
	Projects
	@endif
</h1>

@endsection

@section('main')

@include('components.project-list')

@endsection

@section('footer')
@parent
@endsection