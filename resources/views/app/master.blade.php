@extends('layouts.platform')

@section('meta-title', 'Freelancer App')

@section('nav')
<a href="{{ route('app.home') }}">
	<img class="platform-nav-logo" src="/img/sourceacademy-logo.svg" alt="SourceAcademy Logo">
</a>
<hr>
<a href="{{ route('app.home') }}" class="platform-nav-link">Home</a>
<a href="{{ route('app.projects.index') }}" class="platform-nav-link">Projects</a>
<a href="{{ route('logout') }}" class="platform-nav-link">Logout</a>
@endsection

@section('page-title')
	Freelancer App
@endsection
