@extends('site.master')

@section('meta-title', 'For online retailers')

@section('body-class', 'for-online-retailers')

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
			<span class="sa-logotype">SourceAcademy</span> for Online Retailers
		</p>
		<p class="subtitle">
			How we can increase the ROI of your online store
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