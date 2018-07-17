@extends('site')

@section('title')
Login
@endsection

@section('body-class', 'apply')

@section('main')

<div class="hero is-primary is-medium has-text-centered">

    <div class="hero-body">

        <p class="title">
            Earn more money, work your own hours with SourceAcademy
        </p>

        <p class="subtitle">
            Work as a freelancer - we find you clients and take care of all the annoying bits.
        </p>

        <div class="buttons">
            <a class="button is-primary is-inverted" href="https://davecalnan.typeform.com/to/Dif3c1">Apply to become a freelancer</a>
            <a class="button is-primary is-inverted is-outlined" href="#why-you-should-join">Why you should join</a>
        </div>

    </div>

</div>

<section id="why-you-should-join">
    <div class="columns">
        <div class="column is-half">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Why you should join</p>
                </header>

                <div class="card-content">
                    <p class="subtitle">Earn much more than minimum wage</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')

@endsection
