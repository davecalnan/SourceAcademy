@extends('site.master')

@section('meta-title', 'For freelancers')

@section('body-class', 'for-freelancers')

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
			<span class="sa-logotype">SourceAcademy</span> for Freelancers
		</p>
		<p class="subtitle">
			How we can help you put your best foot forward online
		</p>
	</div>
</section>

<site-section title="Getting yourself out there is key 🗝" subtitle="As a freelancer, you're selling your expertise">
    <div class="container content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p>
                    You’re able to pay your bills because your clients trust what you will deliver and they value your time. Having a home online to showcase your experience, your approach, and your work is crucial in attracting and convincing new clients.
                </p>
                <br>
                <p>
                    We started as freelancers - we know how hard it is to find the time to eventually get around to creating your online portfolio. Let us help you. We’ll work with you make a website which represents who you are, what you offer, and displays what you will deliver for your clients.
                </p>
                <br>
                <p>
                    We’ll collaborate on design, structure, layout, and content to ensure you put your best foot forward online.
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
                <br>
                <p>
                    Two main objectives of your website will likely be to attract new potential and convince potential customers to become customers. We build our sites with this in mind - thoughtful Search Engine Optimisation (SEO) to get your site to people searching for businesses like yours, and strategic landing pages, content, and calls to action to convert potential customers into customers.
                </p>
                <br>
                <p>
                    We work with talented student developers to get your website delivered quickly and affordably. We manage the process, ensure everything goes swimmingly, and guarantee you will be happy with the end result.
                </p>
            </div>
        </div>
    </div>
    <br>
    @include('content.site.portfolio')
</site-section>

<site-section class="" title="Our Process 📈" subtitle="Designed to be as easy for you as possible">
    @include('content.site.our-process')
</site-section>

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