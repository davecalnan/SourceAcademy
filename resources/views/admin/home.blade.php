@extends('admin.master')

@section('meta-title', 'Admin Home')
@section('page-title', 'Admin Home')

@section('main')

<card title="Users">
	@include('components.user-list')
</card>

@endsection
