<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @section('meta-title')
        Hire talented student freelancers
        @show
        | SourceAcademy
    </title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/platform.css') }}">

</head>
<body @yield('body-class')>
    <div id="app" class="platform">
        <nav class="platform-nav">
            @yield('nav')
        </nav>

        <header class="platform-header">
            <h1 class="platform-header-title">
                @yield('page-title')
            </h1>
            @yield('header')
        </header>

        <main class="platform-main @yield('main-class')">
            @yield('main')
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

    </div>

    @include('window')
    @include('scripts.segment')
    @include('scripts.intercom')

    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script type="text/javascript" src="{{ mix('/js/sourceacademy.js') }}"></script>

</body>
</html>