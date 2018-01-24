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
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">

</head>
<body>
    <app-layout id="app">

        <app-nav></app-nav>

        <header class="app-header">
            @section('header')
            SourceAcademy Admin Panel
            @show
        </header>

        {{--  @if(Route::currentRouteName() == 'app.projects.single')
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
        @endif  --}}

        <main class="app-main">
            @section('main')
            Main
            @show
            @if ($errors->any())
                <card title="Something went wrong...">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </card>
                @endif
        </main>

        @section('modal')
        <div class="modal"></div>
        @show

    </app-layout>

    @include('window')
    @if(env('APP_ENV') == 'production')
    @include('app.google-analytics')
    @endif
    @include('intercom')
    @stack('intercom.events')
    <script type="text/javascript" src="/js/app.js"></script>

</body>
</html>