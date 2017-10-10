<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body id="app">

        <nav class="nav">
            <img src="{{ env('APP_URL') }}/img/source-academy-logo.svg">
            <hr>
            @include('app.nav')
        </nav>

    <section class="content hero">

        <header class="header hero-head">
            @section('header')
            SourceAcademy Admin Panel
            @show
        </header>

        <main class="main hero-body">
            @section('main')
            Main
            @show
        </main>

        <footer class="footer hero-foot">
            @section('footer')
            &copy; SourceAcademy 2017
            @show
        </footer>
        
    </section>

</body>
</html>