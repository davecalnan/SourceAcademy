@extends('site.master')

@section('meta-title', 'What we do differently')

@section('body-class', 'what-we-do-differently')

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
			What we do differently
		</p>
		<p class="subtitle">
			Our process, your experience, and our workforce
		</p>
	</div>
</section>

<site-section title="Getting creative help for your business shouldn't be this hard 🚫" subtitle="We're on a mission to make it easier">
    <div class="container content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p>SourceAcademy exists to make it easier and more affordable for individuals and small businesses. We recognise that building your online presence can be difficult, <strong>and expensive.</strong> SourceAcademy's goal is to provide clients with creative, innovative and talented students to help your business grow, without breaking the bank. SourceAcademy is different, because we can provide an easy, quick service while providing the same quality you'd expect. </p> 
            </div>
        </div>
    </div>
</site-section>

<site-section class="has-background-light" title="Why students? 🤔" subtitle="Students have untapped potential">
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

<site-section title="What's currently wrong with web development 🤬" subtitle="And what we do differently">
    @include('content.site.issues-with-web-development')
</site-section>

<site-section class="has-background-light" title="Our Process 📈" subtitle="Designed to be as easy for you as possible">
    @include('content.site.our-process')
</site-section>

<site-section title="Questions? 🤔" subtitle="Anything we haven't answered here?">
    <div class="container">
        @include('content.site.questions')
    </div>
</site-section>

@include('content.site.call-to-action')

@endsection