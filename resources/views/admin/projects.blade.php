@extends('layouts.admin')

@section('title', 'Projects')

@section('header')
<h1 class="app-header-title">Projects</h1>
@endsection

@section('main')

<card title="Projects">
	@include('components.project-list')
</card>

<card title="New Project">
	@include('admin.projects.create')
</card>

@endsection