<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @section('title')
        Title goes here.
        @show
        | SourceAcademy
    </title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>
    <div id="app">

        <nav class="nav">
            <a href="{{ route('site.home') }}">
                <img src="/img/source-academy-logo.svg">
            </a>
            <hr>
            @include('app.nav')
        </nav>

        <section class="content hero">

            <header class="header hero-head">
                @section('header')
                SourceAcademy Admin Panel
                @show
            </header>

            @if(Route::currentRouteName() == 'app.projects.single')
            <toast v-if="showToast" info="Help improve SourceAcademy">
                <feedback
                content="You went to view your projects but you only have one so we brought you straight here."
                call-to-action="Was this helpful?"
                >
                    <feedback-option slot="feedback-options" icon="👍" title="Yes"></feedback-option>
                    <feedback-option slot="feedback-options" icon="👎" title="No"></feedback-option>
                    <feedback-option slot="feedback-options" icon="❌" title="Close"></feedback-option>
                </feedback>
            </toast>
            @endif

        <main class="main hero-body">
            @section('main')
            Main
            @show
        </main>

        <footer class="footer hero-foot has-text-centered">
            @section('footer')
            &copy; SourceAcademy 2017
            @show
        </footer>

    </section>

    @section('modal')
    <div class="modal"></div>
    @show

</div>

@include('window')
@if(env('APP_ENV') == 'production')
@include('app.google-analytics')
@endif
@include('intercom')
@stack('intercom.events')
<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>