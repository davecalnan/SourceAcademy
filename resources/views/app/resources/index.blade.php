@extends('layouts.app')

@section('title', isset($title) ? $title : 'Resources')

@section('header')

<h1 class="title">
	@if(isset($title))
	{{ $title }}
	@else
	Resources
	@endif
</h1>

@endsection

@section('main')

<section class="section">
	@include('components.resource-list')
</section>

@endsection

@section('footer')
@parent
@endsection