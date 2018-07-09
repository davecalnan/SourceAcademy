@extends('layouts.platform')

@section('meta-title', 'Dashboard')

@section('nav')
<a href="{{ route('dashboard.home') }}">
	<img class="platform-nav-logo" src="/img/sourceacademy-logo.svg" alt="SourceAcademy Logo">
</a>
<hr>
<a href="{{ route('dashboard.home') }}" class="platform-nav-link">Home</a>
<a href="{{ route('dashboard.projects.index') }}" class="platform-nav-link">Projects</a>
<a href="{{ route('logout') }}" class="platform-nav-link">Logout</a>
@endsection

@section('page-title')
	Dashboard
@endsection
