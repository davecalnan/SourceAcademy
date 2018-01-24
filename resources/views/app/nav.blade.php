<div class="nav-links">
	<a href="/" class="nav-link">Home</a>
	<a href="/projects" class="nav-link">Projects</a>
	@if (Auth::user() && Gate::allows('admin', $user = Auth::user()))
	<a href="/resources" class="nav-link">Resources</a>
	@endif
	@if (Auth::user())
	<a href="{{ route('logout') }}" class="nav-link">Logout</a>
	@else
	<a href="{{ route('login') }}" class="nav-link">Login</a>
	@endif
</div>
