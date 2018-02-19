@extends('site')

@section('title', 'Hire top quality student freelancers')

@section('body-class', 'freelancers')

@section('main')

<sidebar-layout>
	<h1 class="title" slot="header">Freelancers</h1>
	<h2 class="subtitle" slot="header">Our student freelancers make the magic happen ✨</h2>
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
	@foreach ($freelancers as $freelancer)
	<freelancer-card slot="main" :freelancer="{{ $freelancer }}"></freelancer-card>
	@endforeach
</sidebar-container>

<main>
</main>
	<section class="sidebar" style="background-color:blue;">
		
	</section>

	<section class="freelancers-list">
		{{--  @foreach ($freelancers as $freelancer)  --}}
		
	</section>
</section>

@endsection