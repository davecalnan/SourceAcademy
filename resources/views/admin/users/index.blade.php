@extends('admin.master')

@section('meta-title', 'Users')
@section('page-title', 'Users')

@section('main')

<card title="Users">
	@include('components.user-list')
</card>

<card title="Add a user">
	@include('admin.users.create')
</card>

@endsection
