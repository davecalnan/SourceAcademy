@extends('site')

@include('components.update-password-form')

@section('title')
Update Password
@endsection

@section('main')

<div class="hero is-medium">

    <div class="hero-body">
        <div class="columns is-centered">
            <div class="column is-narrow card">
                <p class="title">@yield('form-title')</p>
                <hr>
                @yield('form-body')
                @yield('form-footer')
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')

@endsection
