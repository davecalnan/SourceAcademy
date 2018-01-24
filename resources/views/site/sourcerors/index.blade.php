@extends('site')

@section('title', 'Hire top quality student freelancers')

@section('body-class', 'sourcerors')

@section('main')

<sidebar-layout>
	<h1 class="title" slot="header">Sourcerors</h1>
	<h2 class="subtitle" slot="header">We call them Sourcerors because they make the magic happen ✨</h2>
	<div class="card-content" slot="sidebar">
		<h4 class="title is-4">Filter</h4>
		<hr>
		<form action="">
			<label for="wordpress">Wordpress</label>
			<input type="checkbox" name="wordpress">
			<br>
			<label for="shopify">Shopify</label>
			<input type="checkbox" name="shopify">
		</form>
	</div>
	@foreach ($sourcerors as $sourceror)
	<sourceror-card slot="main" :sourceror="{{ $sourceror }}"></sourceror-card>
	@endforeach
</sidebar-container>

<main>
</main>
	<section class="sidebar" style="background-color:blue;">
		
	</section>

	<section class="sourcerors-list">
		{{--  @foreach ($sourcerors as $sourceror)  --}}
		
	</section>
</section>

@endsection