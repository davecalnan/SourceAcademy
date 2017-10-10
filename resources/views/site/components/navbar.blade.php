<nav class="navbar container" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img class="navbar-logo" src="{{ env('APP_URL') }}/img/source-academy-logo.svg" alt="SourceAcademy">
        </a>

        <span class="navbar-burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </div>

    <div class="navbar-menu" id="navMenu">
        <span class="navbar-end">
            <a class="navbar-item {{Route::currentRouteName() == 'site.home' ? 'is-active' : ''}}" href="/">
                Home
            </a>

            @auth
            <a class="navbar-item" href="/logout">Logout</a>
            <span class="navbar-item">
                <a class="button is-primary is-outlined" href="{{ route('app.home') }}">Dashboard</a>
            </span>
            @else
            <span class="navbar-item">
                <a class="button is-primary is-outlined" href="{{ route('login') }}">Login</a>
            </span>
            @endauth

        </span>
    </div>
</nav>
