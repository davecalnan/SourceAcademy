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
    <div class="container">
        <div class="columns has-text-centered">
            <div class="column">
                <h1 class="title">Time Consuming 😤</h1>
                <h2 class="subtitle">Getting a website made takes too long</h2>
                <p>We have streamlined the process and automated the repetitive tasks so we can get your new site live in a jiffy.</p>
            </div>
            <div class="column">
                <h1 class="title">Confusing 🤯</h1>
                <h2 class="subtitle">There is too much mystery in web development</h2>
                <p>We've designed a straightforward and easy-to-understand process with all of the information provided upfront - how long it will take, how long it will cost, and what is required from you.</p>
            </div>
            <div class="column">
                <h1 class="title">Expensive 🤑</h1>
                <h2 class="subtitle">Getting a website made is too expensive</h2>
                <p>Working with a student freelancer gets you a developer who is up to date with the latest design trends, and fundamentally understands how a website should work as they have grown up on it.</p>
            </div>
        </div>
    </div>
</site-section>

<site-section class="has-background-light" title="Our Process 📈" subtitle="We're continually improving this to make your life easier">
    <div class="columns has-text-centered" style="margin-bottom: 3rem">
        <div class="column is-4 is-offset-2">
            <h1 class="title">1. Form 📋</h1>
            <h2 class="subtitle">You fill out a brief form</h2>
            <p>This gives us the details we need to create a proposal and come back to you</p>
        </div>
        <div class="column is-4">
            <h1 class="title">2. Proposal 📄</h1>
            <h2 class="subtitle">We come back with a proposal for the website</h2>
            <p>This includes demos of how the site will look, functionality, what will be delivered, how long it will take, and how much it will cost.</p>
        </div>
    </div>
    <div class="columns has-text-centered">
        <div class="column is-4">
            <h1 class="title">3. Skeleton ☠️</h1>
            <h2 class="subtitle">Once you're happy, we get straight to work</h2>
            <p>We come back in a few days with the structure of the site in place and dummy content.</p>
        </div>
        <div class="column is-4">
            <h1 class="title">4. Content 📝</h1>
            <h2 class="subtitle">Together we flesh out the content of the site</h2>
            <p>Depending on your plan, you provide the content or we co-create it. We provide details of exactly what we need from you to represent your business on your webssite.</p>
        </div>
        <div class="column is-4">
            <h1 class="title">5. Finishing touches 🍒</h1>
            <h2 class="subtitle">We make any revisions and polish the site off</h2>
            <p>We work with you to ensure we deliver the best possible site.</p>
        </div>
    </div>
</site-section>

<site-section title="Questions? 🤔" subtitle="Anything we haven't answered yet?">
    @include('components.site.questions')
</site-section>

<site-section class="has-background-light no-padding-x" title="Portfolio 🖥" subtitle="Sites we have made for people like you">
    @include('content.site.portfolio')
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