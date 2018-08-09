@extends('layouts.platform')

@section('meta-title', 'Dashboard')

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
		<li><a href="{{ route('dashboard.home') }}">Home</a></li>
	</ul>
	<p class="menu-label">
		Account
	</p>
	<ul class="menu-list">
		<li><a href="{{ env('APP_URL') . '/logout' }}">Logout</a></li>
	</ul>
</aside>

@endsection

@section('page-title')
	Dashboard
@endsection
