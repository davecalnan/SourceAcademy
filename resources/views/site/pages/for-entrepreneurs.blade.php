@extends('site.master')

@section('meta-title', 'For entrepreneurs')

@section('body-class', 'for-entrepreneurs')

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
			<span class="sa-logotype">SourceAcademy</span> for Entrepreneurs
		</p>
		<p class="subtitle">
			How we can help validate or launch your idea
		</p>
	</div>
</section>

<site-section title="Title" subtitle="Subtitle">

</site-section>

<site-section class="has-background-light" title="Portfolio 🖥" subtitle="Sites we have made for people like you">

</site-section>


<site-section title="Testimonials 🙌🏻" subtitle="What customers like you have to say">
    @include('content.site.testimonials')
</site-section>

<site-section class="has-background-light" title="How much it costs 💰" subtitle="Simple, upfront pricing. Now just how much we think we can get out of you">
    @component('components.site.pricing.wordpress')
    @endcomponent
</site-section>

@include('content.site.call-to-action')

@endsection