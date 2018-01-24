@extends('app.projects.single')

@section('main')

<section class="section has-border-bottom">
	@include('components.project-user-list')
</section>

<section class="section has-border-bottom has-overflow-x-children">
	@include('components.asset-list')
</section>

<section class="section has-border-bottom">
	@include('components.resource-list')
</section>

<section class="section">
	@include('admin.resources.create')
</section>

@endsection