@extends('layouts.app')

@section('title', 'Edit Resource')

@section('header')
<h1 class="title">Resource: {{ $resource->name }}</h1>
@endsection

@section('main')

<section class="section has-border-bottom">
	@include('components.edit-resource')
</section>

@endsection

@section('footer')
@parent
@endsection