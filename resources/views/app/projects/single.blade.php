@extends('app')

@section('title', 'Project')

@section('header')
<h1>Project: {{ $project->name }}</h1>
@endsection

@section('main')

<a href="/app/projects"><- Back to all projects.</a>

<h2>Resources:</h2>

@endsection

@section('footer')
@parent
@endsection