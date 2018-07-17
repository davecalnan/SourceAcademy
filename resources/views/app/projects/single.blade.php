@extends('app.master')

@section('meta-title')
{{ $project->name }}
@endsection

@section('page-title')
Project: {{ $project->name }}
@endsection

@section('main')

<card>
	Welcome to your project. We'll provide you with more details shortly.
</card>

@endsection

@section('footer')
@parent
@endsection
