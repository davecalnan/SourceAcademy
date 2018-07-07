@extends('layouts.platform')

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

<section class="section">
	@include('components.project-list')
</section>

@endsection

@section('footer')
@parent
@endsection