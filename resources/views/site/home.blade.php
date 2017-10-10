@extends('site')

@section('title', 'Hire top quality student freelancers')

@section('hero-modifiers', 'is-medium is-primary')

@section('main')

<section class="hero is-primary is-medium has-text-centered">
	<div class="hero-body">
		<h1 class="title">
			Hire top quality student freelancers.
		</h1>
		<h2 class="subtitle">
			Wordpress Developers, Shopify Developers, Marketers.
		</h2>

		<div class="buttons">
			<a class="button is-primary is-inverted" href="#services">View our services</a>
			<a class="button is-primary is-inverted is-outlined" href="#get-in-touch">Get in touch</a>
		</div>
	</div>
</section>

<section id="services" class="container section">
	<h1 class="title has-text-centered">What do you need help with?</h1>
	<div class="columns">

		<div class="column">
			<div class="card">
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<figure class="image is-48x48">
								<img src="{{ env('APP_URL') }}/img/wordpress-icon.svg" alt="Wordpress icon">
							</figure>
						</div>
						<div class="media-content">
							<p class="title is-4">Basic Website</p>
							<p class="subtitle is-6">Wordpress Development</p>
						</div>
					</div>

					<p>
						Need a personal website or a brochure website for your business?
						One of our freelancers will help you launch or refresh your home on the web.
					</p>

				</div>
				<footer class="card-footer">
					<p class="card-footer-item">From €300</p>
					<a class="card-footer-item is-primary is-pulled-right" href="#get-in-touch">Get in touch</a>
				</footer>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<figure class="image is-48x48">
								<img src="{{ env('APP_URL') }}/img/shopify-icon.svg" alt="Shopify icon">
							</figure>
						</div>
						<div class="media-content">
							<p class="title is-4">eCommerce Website</p>
							<p class="subtitle is-6">Shopify Development</p>
						</div>
					</div>

					<p>
						Finally start that online store you've been dream of or begin a complete overhaul of your existing site with the help of one of our talented students.
					</p>

				</div>
				<footer class="card-footer">
					<p class="card-footer-item">From €500</p>
					<a class="card-footer-item is-primary is-pulled-right" href="#get-in-touch">Get in touch</a>
				</footer>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<div class="card-content">
					<div class="media">
						<div class="media-left">
							<figure class="image is-48x48">
								<img src="{{ env('APP_URL') }}/img/target.svg" alt="Digital marketing">
							</figure>
						</div>
						<div class="media-content">
							<p class="title is-4">Digital Marketing</p>
							<p class="subtitle is-6">Strategy, Advertising, Implementation</p>
						</div>
					</div>

					<p>
						Want to identify new areas to grow your business? Want help with advertising or managing your social media accounts? Hire a student up to date with the latest trends.
					</p>

				</div>
				<footer class="card-footer">
					<p class="card-footer-item">From €350</p>
					<a class="card-footer-item is-primary is-pulled-right" href="#get-in-touch">Get in touch</a>
				</footer>
			</div>
		</div>

	</div>
</section>

<section id="get-in-touch" class="section hero is-light has-text-centered">
	<h1 class="title">Get in touch</h1>
	<p>
		Email:
		<a class="is-primary" href="mailto:d@ve.ie">d@ve.ie</a>
	</p>
</section>

@endsection