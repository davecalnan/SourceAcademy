@extends('layouts.site')

@section('title')
Password Reset
@endsection

@section('main')

<div class="hero is-medium">

    <div class="hero-body">
        <div class="columns is-centered">
            <div class="column is-narrow card">
                <p class="title">Send password reset email</p>
                <hr>
                <form method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label">Your email</label>
                        <div class="control">
                            <input id="email" class="input {{ $errors->has('email') ? ' is-error' : '' }}" type="email" name="email" value="{{ old('email') }}" placeholder="e.g. alexsmith@gmail.com" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-primary" type="submit">Send Email</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
