@extends('site.master')

@section('title')
Login
@endsection

@section('main')

<div class="hero is-medium">

    <div class="hero-body">
        <div class="columns is-centered">
            <div class="column is-narrow card">
                <p class="title">Login</p>
                <hr>
                <form method="POST" action="{{ route('login') }}">
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

                    <div class="field">
                        <label class="label">Your password</label>
                        <div class="control">
                            <input id="password" class="input {{ $errors->has('password') ? ' is-error' : '' }}" type="password" name="password" value="{{ old('password') }}" placeholder="********" required>
                        </div>
                        @if ($errors->has('password'))
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            Remember me
                        </label>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-primary" type="submit">Submit</button>
                        </div>
                        <div class="control">
                            <a class="button is-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
