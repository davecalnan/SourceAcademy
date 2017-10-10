@extends('app.projects.index')

@section('main')

@include('components.project-list')

<hr>

@include('admin.projects.create')

@endsection
