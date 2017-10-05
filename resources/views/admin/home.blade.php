@extends('app')

@section('title', 'Admin Home')

@section('header')
<h1 class="title">Admin Home</h1>
@endsection

@section('main')

<h1 class="title is-5">Users</h1>

@forelse ($users as $user)
	<p>{{ $user->name }}</p>
@empty
<p>No users found.</p>

@endforelse

@endsection

@section('footer')
@parent
@endsection