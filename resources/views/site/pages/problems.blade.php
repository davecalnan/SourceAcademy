@extends('site.master')

@section('meta-title', 'Problems')

@section('body-class', 'problems')

@section('main')

<site-section>
    <div class="columns">
        <div class="column is-8 is-offset-2">
            @include('components.site.questions')
        </div>
    </div>
</site-section>

@endsection