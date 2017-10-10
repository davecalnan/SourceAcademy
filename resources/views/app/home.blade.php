@extends('app')

@section('title', 'App Home')

@section('header')
<h1>
	Hi, 
	@isset(Auth::user()->name)
	{{Auth::user()->name}}.
	@else
	there.
	@endisset
</h1>
@endsection

@section('main')
@parent
Homepage
@endsection

@section('footer')
@parent
@endsection