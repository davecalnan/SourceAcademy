@extends('site.master')

@section('meta-title', 'For business owners')

@section('body-class', 'for-business-owners')

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
			<span class="sa-logotype">SourceAcademy</span> for Business Owners
		</p>
		<p class="subtitle">
			How we can help grow your online presence
		</p>
	</div>
</section>

<site-section title="What's currently wrong with web development 🤬" subtitle="And what we do differently">
    @include('content.site.issues-with-web-development')
</site-section>

<site-section class="has-background-light" title="Our Process 📈" subtitle="Designed to be as easy for you as possible">
    @include('content.site.our-process')
</site-section>

<site-section title="Questions? 🤔" subtitle="Anything we haven't answered yet?">
    <div class="container">
        @include('content.site.questions')
    </div>
</site-section>

<site-section class="has-background-light no-padding-x" title="Portfolio 🖥" subtitle="Sites we have made for people like you">
    @include('content.site.portfolio')
</site-section>

<site-section title="Testimonials 🙌🏻" subtitle="What customers like you have to say">
    @include('content.site.testimonials')
</site-section>

<site-section class="has-background-light" title="How much it costs 💰" subtitle="Simple, upfront pricing. Not just how much we think we can get out of you">
    @include('content.site.pricing.wordpress')
</site-section>

@include('content.site.call-to-action')

@endsection