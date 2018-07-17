@extends('admin.master')

@section('meta-title', 'Organisations')
@section('page-title', 'Organisations')

@section('main')

@foreach($organisations as $organisation)
<card title="{{ $organisation->name }}" title-link="/organisations/{{ $organisation->slug }}">
    <p>Users:</p>
    <ul>
    @foreach($organisation->users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
    </ul>
</card>
@endforeach

@endsection