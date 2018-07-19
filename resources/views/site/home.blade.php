@extends('site.master')

@section('meta-title', 'Hire top quality student freelancers')

@section('body-class', 'home')

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
		<h1 class="title">
			We make getting <span id="typed-services"></span> easy.
		</h1>
		<h2 class="subtitle">
			Grow your business with the help of talented student freelancers.
		</h2>

		<div class="centered">
			<a href="{{ route('signup') }}" class="button is-primary">Start a project</a>
			<a onclick="Intercom('showNewMessage')" class="button is-white is-outlined">Get in touch</a>
		</div>
	</div>
</section>

<site-section title="Get it done better with a student freelancer ✅" subtitle="Focus on running your business, we'll do the rest">
	<div class="container">
		<div class="services-grid">
            @component('components.card')
                @slot('icon')
                    <img src="/img/brick-and-mortar-store.svg" alt="An illustration of a brick and mortar store">
                @endslot
                @slot('title')
                    Business Owner
                @endslot
                @slot('subtitle')
                    Want to launch or refresh your online presence?
                @endslot
                @slot('content')
                    <p>Whether you already have a website or not, we can help you attract new customers with a website showcasing your business and sharing your brand's story.</p>
                @endslot
                @slot('footer')
                    <p class="card-footer-item">From €700</p>
                    <a class="card-footer-item is-primary" href="{{ route('site.pages.for-business-owners') }}">Learn more</a>
                @endslot
            @endcomponent

            @component('components.card')
                @slot('icon')
                    <img src="/img/looking-for-growth.svg" alt="An illustration of a woman with a bubble and an arrow showing growth">
                @endslot
                @slot('title')
                    Freelancer
                @endslot
                @slot('subtitle')
                    Want to have a professional home online for clients?
                @endslot
                @slot('content')
                    <p>We started as freelancers in college. We know how hard it is to get around to building your own portfolio and making your home on the web. Let us help.<p>
                @endslot
                @slot('footer')
                    <p class="card-footer-item">From €700</p>
					<a class="card-footer-item is-primary" href="{{ route('site.pages.for-freelancers') }}">Learn more</a>
                @endslot
            @endcomponent

            @component('components.card')
                @slot('icon')
                    <img src="/img/line-chart-on-laptop.svg" alt="An illustration of laptop displaying a line chart showing positive growth">
                @endslot
                @slot('title')
                    Entrepreneur
                @endslot
                @slot('subtitle')
                    Want help validating or launching a new idea?
                @endslot
                @slot('content')
                    <p>Our team has started businesses in the past - some successful, others less so! If you're looking for a partner to help with a new venture, we're here.</p>
                @endslot
                @slot('footer')
                    <p class="card-footer-item">From €700</p>
					<a class="card-footer-item is-primary" href="{{ route('site.pages.for-entrepreneurs') }}">Learn more</a>
                @endslot
            @endcomponent

            @component('components.card')
                @slot('icon')
                    <img src="/img/shopify-icon.svg" alt="An icon of the Shopify logo">
                @endslot
                @slot('title')
                    Online Retailer
                @endslot
                @slot('subtitle')
                    Want an online store or move from Magento to Shopify?
                @endslot
                @slot('content')
                    <p>Decided it's time you start selling your products online, or time for a change with your online store? We love to develop and launch E-Commerce sites.<p>
                @endslot
                @slot('footer')
                    <p class="card-footer-item">From €1200</p>
                    <a class="card-footer-item is-primary" href="{{ route('site.pages.for-online-retailers') }}">Learn more</a>
                @endslot
            @endcomponent
		</div>
	</div>
</site-section>

<site-section class="has-background-light" title="Testimonials 🙌🏻" subtitle="See what our customers have to say">
	@include('content.site.testimonials')
</site-section>

<site-section title="Save time, save money 💰" subtitle="Hire a student freelancer">
	<div class="container content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p>This paragraph will say stuff about why students will deliver work quicker. Including our process.</p>
                <br>
                <p>This paragraph will say stuff about why students will deliver work cheaper.</p> 
			</div>
		</div>
	</div>
</site-section>

<site-section class="has-background-light" title="Portfolio 🖥" subtitle="Here's some we made earlier">
    
</site-section>

@include('content.site.call-to-action')

@endsection