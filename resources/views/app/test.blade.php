@extends('layouts.app')

@section('title', 'Test')

@section('header')
<h1>Test</h1>
@endsection

@section('main')

<section class="section">
	<onboarding
	name="{{ $query->name }}"
	email="{{ $query->email }}"
	>
		
	</onboarding>
</section>

@endsection

@section('footer')
@parent
@endsection