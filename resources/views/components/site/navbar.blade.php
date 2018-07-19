<nav class="navbar is-primary {{ isset($class) ? $class : '' }}" :class="{ 'is-active': navbarMenuVisibility }">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('site.home') }}">
            <img class="navbar-logo" src="/img/sourceacademy-logo-white.svg" alt="SourceAcademy Logo">
        </a>
        <a role="button" class="navbar-burger" :class="{ 'is-active': navbarMenuVisibility }" @click="navbarMenuVisibility = !navbarMenuVisibility" aria-label="menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>
    <div class="navbar-menu" :class="{ 'is-active': navbarMenuVisibility }">
        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Who we help</a>

                <div class="navbar-dropdown">
                    <a href="{{ route('site.pages.for-business-owners') }}" class="navbar-item">Business Owners</a>
                    <a href="{{ route('site.pages.for-freelancers') }}" class="navbar-item">Freelancers</a>
                    <a href="{{ route('site.pages.for-entrepreneurs') }}" class="navbar-item">Entrepreneurs</a>
                    <a href="{{ route('site.pages.for-online-retailers') }}" class="navbar-item">Online Retailers</a>
                </div>
            </div>
            <a href="{{ route('site.pages.about') }}" class="navbar-item">About</a>
            @if (Auth::check())
            <a href="{{ route('logout') }}" class="navbar-item">Logout</a>
            @else
            <a href="{{ route('login') }}" class="navbar-item">Login</a>
            @endif
            <div class="navbar-item">
                <div class="field">
                    <p class="control">
                        @if (Auth::check())
                        <a href="{{ route('redirect.home') }}" class="button">Dashboard</a>
                        @else
                        <a href="{{ route('signup') }}" class="button">Signup</a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>