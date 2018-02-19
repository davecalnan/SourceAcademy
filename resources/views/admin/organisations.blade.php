@extends('layouts.admin')

@section('title', 'Organisations')

@section('header')
<h1 class="app-header-title">All Organisations</h1>
@endsection

@section('main')

@foreach($organisations as $organisation)
<card title="{{ $organisation->name }}" title-link="/organisations/{{ $organisation->slug }}">

</card>
@endforeach

@endsection