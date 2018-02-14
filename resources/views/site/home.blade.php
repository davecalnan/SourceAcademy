@extends('site')

@section('title', 'Hire top quality student freelancers')

@section('body-class', 'home')

@section('main')

<section class="hero is-primary is-medium has-text-centered">
	<div class="hero-body">
		<p class="title">
			Get it done better with a student freelancer.
		</p>
		<p class="subtitle">
			Grow your business with the help of talented students.
		</p>

		<div class="buttons">
			<a class="button is-primary is-inverted" href="/signup">Start a project</a>
			<a class="button is-primary is-inverted is-outlined" href="/freelancers">View students</a>
		</div>
	</div>
</section>

<site-section class="container" title="How it works">
	<steps>
		<step image="/img/search.svg" alt="Browse available project types." title="Browse" details="Select the type of project you want help with."></step>
		<step image="/img/users.svg" alt="Choose a student freelancer to hire." title="Pick" details="Pick the perfect student freelancer for your job."></step>
		<step image="/img/smartphone-talk.svg" alt="Tell us about your project." title="Tell us" details="Give us the details of your project and we'll get started."></step>
		<step image="/img/list.svg" alt="Sit back and relax." title="Relax" details="Sit back and relax, your student freelancer will complete your project and seek your approval and final sign-off."></step>
	</steps>
</site-section>

<site-section class="has-background-light" title="Testimonials" subtitle="See what our clients have to say.">
	<div class="columns">
		<div class="column">
			<div class="box">
				<article class="media">
					<figure class="media-left">
						<div class="image is-128x128">
							<img src="/img/finbarr-pyne.jpg" alt="Finbarr Pyne">
						</div>
						<div class="image is-128x128">
							<img src="/img/castlegale-logo.png" alt="Castlegale Technical Solutions Logo">
						</div>
					</figure>
					<div class="media-content">
						<h1 class="title">Finbarr Pyne</h1>
						<h2 class="subtitle">Owner, Castlegale Technical Solutions</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
						</p>
						<br>
						<a class="button is-primary" href="https://castlegale.com" target="_blank">View Website</a>
						<a class="button is-text" href="/freelancers/seandonnellan">Made by Sean Donnellan</a>
					</div>
				</article>
			</div>
		</div>
		<div class="column">
			<div class="box">
				<article class="media">
					<figure class="media-left">
						<div class="image is-128x128">
							<img src="/img/dc-cahalane.jpg" alt="DC Cahalane">
						</div>
						<div class="image is-128x128">
							<img src="/img/republicofwork-logo.svg" alt="Republic Of Work Logo">
						</div>
					</figure>
					<div class="media-content">
						<h1 class="title">DC Cahalane</h1>
						<h2 class="subtitle">CEO, Republic of Work</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
						</p>
						<br>
						<a class="button is-primary" href="https://dc.ie" target="_blank">View Website</a>
						<a class="button is-text" href="/freelancers/davecalnan">Made by Dave Calnan</a>
					</div>
				</article>
			</div>
		</div>
	</div>
</site-section>

<site-section title="Project types available." subtitle="We're always adding more.">
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
				<p class="card-footer-item">From €300</p>
				<a class="card-footer-item is-primary is-pulled-right" href="/wordpress-development">View students</a>
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
				<p class="card-footer-item">From €500</p>
				<a class="card-footer-item is-primary is-pulled-right" href="/shopify-development">View students</a>
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
				<p class="card-footer-item">From €100</p>
				<a class="card-footer-item is-primary" href="/videography">View students</a>
			</footer>
		</div>

	</div>
</site-section>

@endsection