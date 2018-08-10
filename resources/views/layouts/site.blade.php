<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @section('meta-title')
        Getting a new website just got easier
        @show
        | SourceAcademy
    </title>

    <meta name="description" content="
        @section('description')
        Getting a website made doesn't have to be an ordeal. We make it less time-consuming, less confusing, and less expensive.
        @show
    ">
    <meta property="og:title" content="
        @section('meta-title')
        Getting a website made just got easier
        @show
    ">
    <meta property="og:description" content="
        @section('description')
        Getting a website made doesn't have to be an ordeal. We make it less time-consuming, less confusing, and less expensive.
        @show
    ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ env('APP_URL') . '/img/seo/sourceacademy-website.jpg' }}">
    <meta property="og:image:height" content="1080">
    <meta property="og:image:width" content="1920">

    <!-- CSS -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/site.css') }}">
    
</head>
<body class="@yield('body-class')">
    <div id="app" class="site">

        <header class="header">
            @section('nav')
            @component('site.components.navbar')
            @show
        </header>

        <main class="main">
            @yield('main')
        </main>

        <footer class="footer">
            @component('components.site.footer')
            @endcomponent
        </footer>

    </div>

    @include('window')
    @include('scripts.segment')
    <script type="text/javascript" src="{{ mix('/js/sourceacademy.js') }}"></script>
</body>
</html>