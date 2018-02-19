<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @section('title')
        Hire top quality student freelancers
        @show
        | SourceAcademy
    </title>

    <!-- CSS -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/site.css') }}">
    
</head>
<body class="@yield('body-class')">
    <div id="app" class="site">

        <header class="header">
            @section('header')
            <navbar :is-primary="true"></navbar>
            @show
        </header>

        <main class="main">
            @yield('main')
        </main>

        <footer class="footer has-text-centered">
            @section('footer')
            &copy; 2018 SourceAcademy
            @show
        </footer>

    </div>

    @include('window')
    @if(env('APP_ENV') == 'production')
        @include('site.google-analytics')
    @endif
    @include('intercom')
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>