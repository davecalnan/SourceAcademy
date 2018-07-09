@extends('dashboard.master')

@section('meta-title')
{{ $project->name }}
@endsection

@section('page-title')
Project: {{ $project->name }}
@endsection

@section('main')

<card>
	Thanks for creating your first project. We'll be in touch soon with details!
</card>

@endsection

@section('footer')
@parent
@endsection
