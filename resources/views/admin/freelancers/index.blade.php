@extends('admin.master')

@section('meta-title', 'Freelancer')
@section('page-title', 'Freelancer')

@section('main')

<card title="Freelancers">
  @include('components.freelancer-list')
  <a href="{{ route('admin.freelancers.create') }}"><button class="button is-primary">Add New Freelancer</button></a>
</card>

@endsection
