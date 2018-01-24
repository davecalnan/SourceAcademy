@extends('app')

@section('title', 'Admin Home')

@section('header')
<p class="title">Admin Home</p>
@endsection

@section('main')

<section class="section">
	@include('components.user-list')
</section>

@endsection

@section('footer')
@parent
@endsection