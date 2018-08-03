@extends('site.master')

@section('meta-title', 'Our process')

@section('body-class', 'our-process')

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
			Our process
		</p>
		<p class="subtitle">
			Why we do things the way we do
		</p>
	</div>
</section>

<site-section class="has-background-light" title="Our Process 📈" subtitle="Designed to be as easy for you as possible">
    @include('content.site.our-process')
</site-section>

<site-section title="Questions? 🤔" subtitle="Anything we haven't answered here?">
    <div class="container">
        @include('content.site.questions')
    </div>
</site-section>

@include('content.site.call-to-action')

@endsection