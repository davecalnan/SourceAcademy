@extends('layouts.admin')

@section('title', 'Clients')

@section('header')
<h1 class="app-header-title">All Clients</h1>
@endsection

@section('main')

@foreach($clients as $client)
<card title="{{ $client->name }}" title-link="/clients/{{ $client->slug }}">

</card>
@endforeach

@endsection