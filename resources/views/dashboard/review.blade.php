@extends('dashboard.master')

@section('meta-title', 'Review your website')

@section('page-title', 'Review your website')

@section('main-class', 'no-padding')

@section('main')

<section class="website-review">
	<section class="website-review-browser">
		@component('components.common.browser')
			@slot('type') with-url @endslot
			@slot('domain') narration.sourceacademysites.com @endslot
			@slot('src') https://narration.sourceacademysites.com @endslot
			@slot('alt') Narration.ie Embedded Website @endslot
		@endcomponent
	</section>
	<nav class="website-review-nav">
		<h1 class="title">Comments</h1>
		<hr>
		
	</nav>
</section>

@endsection
