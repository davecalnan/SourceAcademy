@extends('app.master')

@section('meta-title')
{{ $project->name }}
@endsection

@section('page-title')
Project: {{ $project->name }}
@endsection

@section('main')

<card>
	Hey.
</card>

@endsection

@section('footer')
@parent
@endsection
