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
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/vendor.css">

</head>
<body id="app">

    <div class="columns is-gapless">
      <div class="column is-one-quarter">

        <nav id="nav">
            @include('app.nav')
        </nav>

    </div>
    <div id="content" class="column hero">

        <header id="header" class="hero-head">
            @section('header')
            SourceAcademy Admin Panel
            @show
        </header>

        <main id="main" class="hero-body">
            @section('main')
            Main
            @show
        </main>

        <footer id="footer" class="hero-foot">
            @section('footer')
            &copy; SourceAcademy 2017
            @show
        </footer>

    </div>
</div>

</body>
</html>