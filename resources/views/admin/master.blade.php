@extends('layouts.platform')

@section('meta-title', 'Admin Panel')

@section('nav')
<a href="{{ route('admin.home') }}">
	<img class="platform-nav-logo" src="/img/sourceacademy-logo.svg" alt="SourceAcademy Logo">
</a>
<hr>
<a href="{{ route('admin.home') }}" class="platform-nav-link">Home</a>
<a href="{{ route('admin.projects.index') }}" class="platform-nav-link">Projects</a>
<a href="{{ route('admin.users.index') }}" class="platform-nav-link">Users</a>
<a href="{{ route('admin.organisations.index') }}" class="platform-nav-link">Organisations</a> 
<a href="{{ route('admin.servers.index') }}" class="platform-nav-link">Servers</a> 
<a href="{{ route('admin.dones.index') }}" class="platform-nav-link">Activity Feed</a>
<a href="{{ route('logout') }}" class="platform-nav-link">Logout</a>
@endsection

@section('page-title')
	Admin Panel
@endsection
