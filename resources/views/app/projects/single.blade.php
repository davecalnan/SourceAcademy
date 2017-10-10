@extends('app')

@section('title', 'Project')

@section('header')
<h1 class="title">Project: {{ $project->name }}</h1>
@endsection

@section('main')

@if($project->resources)

@include('components.resource-list')

@endif

@endsection

@section('footer')
@parent
@endsection