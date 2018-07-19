@extends('site.master')

@section('meta-title', 'What we do differently')

@section('body-class', 'what-we-do-differently')

@section('nav', '')

@section('main')

<section class="hero is-black is-medium has-text-centered">
    <div class="hero-head">
        @component('components.site.navbar')
            @slot('class')
                is-transparent
            @endslot
        @endcomponent
    </div>
	<div class="hero-body">
		<p class="title">
			What we do differently
		</p>
		<p class="subtitle">
			Our process, your experience, and our workforce
		</p>
	</div>
</section>

<site-section title="title" subtitle="subtitle">

</site-section>

@include('content.site.call-to-action')

@endsection