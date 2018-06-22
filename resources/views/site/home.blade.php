@extends('layouts.site')

@section('title', 'Hire top quality student freelancers')

@section('body-class', 'home')

@section('header')
@endsection

@section('main')

<section class="hero is-black is-medium has-text-centered">
    <div class="hero-head">
        <navbar></navbar>
    </div>
	<div class="hero-body">
		<h1 class="title">
			Getting <span id="typed-services"></span> made doesn't have to be so hard.
		</h1>
		<h2 class="subtitle">
			Grow your business with the help of talented student freelancers.
		</h2>

		<div class="buttons">
			<a class="button is-primary" href="/signup">Start a project</a>
			{{--  <a class="button is-white is-outlined" href="/freelancers">View students</a>  --}}
			<a class="button is-white is-outlined" href="mailto:dave@sourceacademy.co">Get in touch</a>
		</div>
	</div>
</section>

<site-section title="Get it done better with a student freelancer" subtitle="Focus on running your business, we'll do the rest">
	<div class="container">
		<div class="services-grid">
			<div class="card">
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<figure class="image is-48x48">
								<img src="/img/wordpress-icon.svg" alt="Wordpress icon">
							</figure>
						</div>
						<div class="media-content">
							<p class="title is-4">Basic Website</p>
							<p class="subtitle is-6">Wordpress Development</p>
						</div>
					</div>

					<p>
						Need a personal website or a brochure website for your business?
						One of our freelancers will help you launch or refresh your home on the web with a Wordpress website.
					</p>

				</div>
				<footer class="card-footer">
					<p class="card-footer-item">From €400</p>
					{{--  <a class="card-footer-item is-primary is-pulled-right" href="/wordpress-development">Learn more</a>  --}}
					<a class="card-footer-item is-primary is-pulled-right" href="mailto:dave@sourceacademy.co">Get in touch</a>
				</footer>
			</div>

			<div class="card">
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<figure class="image is-48x48">
								<img src="/img/shopify-icon.svg" alt="Shopify icon">
							</figure>
						</div>
						<div class="media-content">
							<p class="title is-4">eCommerce Website</p>
							<p class="subtitle is-6">Shopify Development</p>
						</div>
					</div>

					<p>
						Finally start that online store you've been dreaming of or begin a complete overhaul of your existing site with the help of one of our talented students.
					</p>

				</div>
				<footer class="card-footer">
					<p class="card-footer-item">From €800</p>
					{{--  <a class="card-footer-item is-primary is-pulled-right" href="/shopify-development">Learn more</a>  --}}
					<a class="card-footer-item is-primary is-pulled-right" href="mailto:dave@sourceacademy.co">Get in touch</a>
				</footer>
			</div>

			<div class="card">
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<figure class="image is-48x48">
								<img src="/img/video-camera.svg" alt="Videography">
							</figure>
						</div>
						<div class="media-content">
							<p class="title is-4">Videography</p>
							<p class="subtitle is-6">Promotional or Event Videos</p>
						</div>
					</div>

					<p>
						Promote your business through of video or capture an event to share with your customers. Hire videographers on-demand for whatever your need.
					</p>

				</div>
				<footer class="card-footer">
					<p class="card-footer-item">From €200</p>
					<a class="card-footer-item is-primary" href="/videography">Get in touch</a>
				</footer>
			</div>
		</div>
	</div>
</site-section>

<site-section class="has-background-light" title="Save time, save money" subtitle="Hire a student freelancer">
	<div class="container content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
				{{--  <p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
				</p>  --}}
			</div>
		</div>
	</div>
</site-section>

<site-section class="container" title="How it works">
	<steps>
		<step image="/img/search.svg" alt="Browse available project types." title="Browse" details="Select the type of project you want help with."></step>
		<step image="/img/users.svg" alt="Choose a student freelancer to hire." title="Pick" details="Pick the perfect student freelancer for your job."></step>
		<step image="/img/smartphone-talk.svg" alt="Tell us about your project." title="Tell us" details="Give us the details of your project and we'll get started."></step>
		<step image="/img/list.svg" alt="Sit back and relax." title="Relax" details="Sit back and relax, your student freelancer will complete your project and seek your approval and final sign-off."></step>
	</steps>
</site-section>

<site-section class="has-background-light" title="Testimonials" subtitle="See what our clients have to say">
	<div class="container">
		<div class="testimonials-grid">
			<testimonial client-picture="/img/finbarr-pyne.jpg"
				client-name="Finbarr Pyne"
				client-logo="/img/castlegale-logo.png"
				client-company="Castlegale"
				client-position="Owner"
				:client-quote="['As a provider of technical consultancy services, I wanted my website to look professional and to demonstrate my experience to potential clients.','SourceAcademy gave me just that. The process was super-efficient, with swift turnaround from content delivery to live working website.','All delivered on budget by people who were easy to work with – just like Castlegale!']"
				project-url="https://castlegale.com"
				{{--  freelancer-url="/freelancers/seandonnellan"  --}}
				freelancer-name="Sean Donnellan">
			</testimonial>
			{{--  <testimonial client-picture="/img/dc-cahalane.jpg"
				client-name="DC Cahalane"
				client-logo="/img/republicofwork-logo.svg"
				client-company="Republic of Work"
				client-position="CEO"
				:client-quote="['Quote goes here.','Second paragraph goes here.']"
				project-url="https://castlegale.com"
				freelancer-url="/freelancers/davecalnan"
				freelancer-name="Dave Calnan">
			</testimonial>  --}}
		</div>
	</div>
</site-section>

<div class="hero is-primary">
	<div class="hero-body">
		<div class="container">
			<div class="columns is-vcentered">
				<div class="column is-4 is-offset-2">
					<h1 class="title">Get started today:</h1>
					<h2 class="subtitle">All costs upfront, no hidden fees.</h2>
				</div>
				<div class="column is-4">
					<a class="button is-primary is-inverted" href="/signup">Start a project</a>
					{{--  <a class="button is-primary is-inverted is-outlined" href="/freelancers">View students</a>  --}}
					<a class="button is-primary is-inverted is-outlined" href="mailto:dave@sourceacademy.co">Get in touch</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection