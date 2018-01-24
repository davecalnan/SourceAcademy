@extends('app.projects.index')

@section('main')

<section class="section has-border-bottom">
	@include('components.project-list')
</section>

<section class="section">
	@include('admin.projects.create')
</section>

@endsection
