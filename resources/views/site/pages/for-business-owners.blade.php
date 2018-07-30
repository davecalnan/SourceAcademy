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

<site-section title="Running a business is hard 🤬" subtitle="We're here to help you get where you want to be">
    <div class="container content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p>
                    Most business owners spend all day <em>running</em> their business, keeping it going. It's hard to find the time to work on <em>growing</em> the business. What time you're able to invest in the future is precious and needs to be used effectively.
                </p>
                <p>
                    We believe having a solid online presence is a key part of a growing business’ toolkit. We want to help you get new customers, retain existing customers and most importantly help you grow your business.
                </p>
                <p>
                    Getting help shouldn’t break the bank and it shouldn’t be huge drain on your already limited time. We deliver the easiest website development process out there at an affordable price. We genuinely want to see you succeed and love working with small businesses to get you where you want to be.
                </p>
            </div>
        </div>
    </div>
</site-section>

<site-section class="has-background-light no-padding-x" title="What we offer 💻" subtitle="Modern, well-designed websites representing your brand online">
    <div class="container content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p>
                    We build our websites with Wordpress - the standard choice for small business websites, <strong>powering 25% of all websites</strong>. All of our websites are mobile-optimised, customised to fit your brand, industry, and customers.
                </p>
                <p>
                    Two main objectives of your website will likely be to attract new potential and convince potential customers to become customers. We build our sites with this in mind - thoughtful Search Engine Optimisation (SEO) to get your site to people searching for businesses like yours, and strategic landing pages, content, and calls to action to convert potential customers into customers.
                </p>
                <p>
                    We work with talented student developers to get your website delivered quickly and affordably. We manage the process, ensure everything goes swimmingly, and guarantee you will be happy with the end result.
                </p>
            </div>
        </div>
    </div>
    @include('content.site.portfolio')
</site-section>

<site-section class="" title="Our Process 📈" subtitle="Designed to be as easy for you as possible">
    @include('content.site.our-process')
</site-section>

{{-- <site-section class="no-padding-x" title="Portfolio 🖥" subtitle="Sites we have made for people like you">
    @include('content.site.portfolio')
</site-section> --}}

<site-section class="has-background-light" title="Testimonials 🙌🏻" subtitle="What customers like you have to say">
    @include('content.site.testimonials')
</site-section>

<site-section title="Questions? 🤔" subtitle="Anything we haven't answered yet?">
    <div class="container">
        @include('content.site.questions')
    </div>
</site-section>

<site-section class="has-background-light" title="How much it costs 💰" subtitle="Simple, upfront pricing. Not just how much we think we can get out of you">
    @include('content.site.pricing.wordpress')
</site-section>

@include('content.site.call-to-action')

@endsection