@extends('layouts.platform')

@section('meta-title', 'Admin Panel')

@section('nav')
<a href="{{ route('site.home') }}">
	<img class="platform-nav-logo" src="/img/sourceacademy-logo.svg" alt="SourceAcademy Logo">
</a>
<hr>
<aside class="menu">
	<p class="menu-label">
		Navigation
	</p>
	<ul class="menu-list">
		<li><a href="{{ route('admin.home') }}">Home</a></li>
	</ul>
	<p class="menu-label">
		Administration
	</p>
	<ul class="menu-list">
		<li>
			<a href="{{ route('admin.users.index') }}">Users</a>
			<ul>
				<li><a href="{{ route('admin.freelancers.index') }}">Freelancers</a></li>
			</ul>
		</li>
		<li><a href="{{ route('admin.projects.index') }}">Projects</a></li>
		<li><a href="{{ route('admin.organisations.index') }}">Organisations</a></li>
		<li><a href="{{ route('admin.servers.index') }}">Servers</a></li>
		<li><a href="{{ route('admin.dones.index') }}">Activity Feed</a></li>
	</ul>
	<p class="menu-label">
		Account
	</p>
	<ul class="menu-list">
		<li><a href="{{ route('logout') }}">Logout</a></li>
	</ul>
</aside>
@endsection

{{-- @section('nav')
<a href="{{ route('site.home') }}">
	<img class="platform-nav-logo" src="/img/sourceacademy-logo.svg" alt="SourceAcademy Logo">
</a>
<hr>
<a href="{{ route('admin.home') }}" class="platform-nav-link">Home</a>
<a href="{{ route('admin.projects.index') }}" class="platform-nav-link">Projects</a>
<a href="{{ route('admin.users.index') }}" class="platform-nav-link">Users</a>
<a href="{{ route('admin.freelancers.index') }}" class="platform-nav-link">Freelancers</a>
<a href="{{ route('admin.organisations.index') }}" class="platform-nav-link">Organisations</a>
<a href="{{ route('admin.servers.index') }}" class="platform-nav-link">Servers</a>
<a href="{{ route('admin.dones.index') }}" class="platform-nav-link">Activity Feed</a>
<a href="{{ route('logout') }}" class="platform-nav-link">Logout</a>
@endsection --}}

@section('page-title')
Admin Panel
@endsection
