@extends('layouts.site')

@section('title', 'About SourceAcademy')

@section('body-class', 'about')

@section('main')

<section class="hero is-black is-medium has-text-centered">
	<div class="hero-body">
		<p class="title">
			About
		</p>
		<p class="subtitle">
			How it all started
		</p>
	</div>
</section>

<site-section title="Getting creative help for your business shouldn't be this hard" subtitle="We're on a mission to change this">
    <div class="container content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p>SourceAcademy exists to make it easier and more affordable for individuals and small businesses. We recognise that building your online presence can be difficult, <strong>and expensive.</strong> SourceAcademy's goal is to provide clients with creative, innovative and talented students to help your business grow, without breaking the bank. SourceAcademy is different, because we can provide an easy, quick service while providing the same quality you'd expect. </p> 
            </div>
        </div>
    </div>
</site-section>

<site-section class="has-background-light" title="Why students?" subtitle="An untapped potential">
    <div class="container content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p><strong>Students are digital natives.</strong> We have grown up on the internet, surrounded by digital media and we have a a good eye for strong design and the latest trends. Students have spent their lives navigating well-designed websites, and so are inherently able to replicate this experience for your business. Students can provide an outside, unbiased perspective - giving your business a unique opportunity to gain a fresh pair of eyes, that could lead to the discovery of new ideas and avenues for your business.</p>
                <br>
                <p>Students are hungry for work, and want to grow their portfolio while developing their skills, and have been shown to go the extra mile in delivering a high quality project.</p>
            </div>
        </div>
    </div>
</site-section>

<site-section title="Who we are">
    <div class="container content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p>We are a group of UCC students who have been doing web development, ecommerce consulting, videography, and graphic design professionaly for years while in college. We have seen how effectively we have been able to help our clients grow and we are determined to scale this business and make more individuals and small businesses' lives easier.</p>
            </div>
        </div>
    </div>
</site-section>

<site-section class="has-background-light" title="The Team">
    <div class="columns">
        <div class="column">
            <div class="box">
                <team-member image="/img/dave-calnan.jpg"
                    name="Dave Calnan"
                    position="Founder"
                    email="dave@sourceacademy.co"
                    phone="0861936204">
                </team-member>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <team-member image="/img/jen-chadwick.jpg"
                    name="Jen Chadwick"
                    position="Business Development"
                    email="jen@sourceacademy.co"
                    phone="0833608939">
                </team-member>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <team-member image="/img/sean-donnellan.jpg"
                    name="Sean Donnellan"
                    position="Developer"
                    email="sean@sourceacademy.co">
                </team-member>
            </div>
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