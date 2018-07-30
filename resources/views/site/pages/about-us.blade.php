@extends('site.master')

@section('meta-title', 'About us')

@section('body-class', 'about-us')

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
			About us
		</p>
		<p class="subtitle">
			How it all started
		</p>
	</div>
</section>

<site-section title="Who we are 🎓" subtitle="Students and recent graduates">
    <div class="container content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p>We are a group of UCC students who have been doing web development, ecommerce consulting, videography, and graphic design professionaly for years while in college. We have seen how effectively we have been able to help our clients grow and we are determined to scale this business and make more individuals and small businesses' lives easier.</p>
            </div>
        </div>
    </div>
</site-section>

<site-section class="has-background-light" title="The Team 💼" subtitle="The people who keep it all running">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="box">
                    <team-member image="/img/dave-calnan.jpg"
                        name="Dave Calnan"
                        position="Founder &amp; CEO"
                        email="dave@sourceacademy.co"
                        phone="+353861936204">
                    </team-member>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <team-member image="/img/ruben-ocallaghan.jpg"
                        name="Ruben O'Callaghan"
                        position="Customer Success Manager"
                        email="ruben@sourceacademy.co"
                        phone="+353862147263">
                    </team-member>
                </div>
            </div>
            <div class="column">
                <div class="box">
                    <team-member image="/img/jack-mallon.jpg"
                        name="Jack Mallon"
                        position="Lead Developer"
                        email="jack@sourceacademy.co">
                    </team-member>
                </div>
            </div>
            {{-- <div class="column">
                <div class="box">
                    <team-member image="/img/jen-chadwick.jpg"
                        name="Jen Chadwick"
                        position="Business Development"
                        email="jen@sourceacademy.co"
                        phone="+353833608939">
                    </team-member>
                </div>
            </div> --}}
        </div>
    </div>
</site-section>

@include('content.site.call-to-action')

@endsection