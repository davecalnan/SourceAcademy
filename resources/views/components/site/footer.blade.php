<div class="container">
    <div class="columns">
        <div class="column is-3">
            <h1 class="footer-title">Getting around</h1>
            <ul class="footer-links">
                <li class="footer-link"><a href="{{ route('site.home') }}">Home</a></li>
                @if (Auth::check())
                <li class="footer-link"><a href="{{ route('logout') }}">Logout</a></li>
                @else
                <li class="footer-link"><a href="{{ route('login') }}">Login</a></li>
                @endif
                <li class="footer-link"><a href="{{ route('signup') }}">Signup</a></li>
                <li class="footer-link"><a href="{{ route('redirect.home') }}">Dashboard</a></li>
            </ul>
        </div>
        <div class="column is-3">
            <h1 class="footer-title">Get to know us</h1>
            <ul class="footer-links">
                <li class="footer-link"><a href="{{ route('site.pages.about-us') }}">About us</a></li>
                <li class="footer-link"><a href="{{ route('site.pages.what-we-do-differently') }}">What we do differently</a></li>
            </ul>
        </div>
        <div class="column is-3">
            <h1 class="footer-title">Who we help</h1>
            <ul class="footer-links">
                <li class="footer-link"><a href="{{ route('site.pages.for-business-owners') }}">Business Owners</a></li>
                <li class="footer-link"><a href="{{ route('site.pages.for-freelancers') }}">Freelancers</a></li>
                {{-- <li class="footer-link"><a href="{{ route('site.pages.for-entrepreneurs') }}">Entrepreneurs</a></li> --}}
                {{-- <li class="footer-link"><a href="{{ route('site.pages.for-online-retailers') }}">Online Retailers</a></li> --}}
            </ul>
        </div>
        <div class="column is-3 has-logo">
            <img src="/img/sourceacademy-logo.svg" alt="SourceAcademy logo" class="footer-logo">
            <p class="footer-copyright">&copy; 2018 SourceAcademy</p>
        </div>
    </div>
</div>