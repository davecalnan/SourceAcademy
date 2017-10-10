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
    <link rel="stylesheet" type="text/css" href="/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="/css/site.css">
</head>
<body id="site">
    <header class="header">
        @component('site.components.navbar')
        @endcomponent
    </header>

    <main>
        @yield('main')
    </main>

    <footer class="footer has-text-centered">
        @section('footer')
        &copy; Dave Calnan 2017
        @show
    </footer>

    <script type="text/javascript" src="/js/site.js"></script>
</body>
</html>