@extends('layouts.admin')

@section('title', 'Admin Home')

@section('header')
<h1 class="app-header-title">Admin Home</h1>
@endsection

@section('main')

<card title="Users">
	@include('components.user-list')
</card>

@endsection
