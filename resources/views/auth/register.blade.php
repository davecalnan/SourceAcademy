@extends('site')

@section('title')
Register
@endsection

@section('main')

<div class="container">
    <div class="columns is-centered">
        <div class="column is-narrow card">
            <h1 class="title">Register</h1>
            <hr>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Your name</label>
                    <div class="control">
                        <input id="name" class="input{{ $errors->has('name') ? ' has-error' : '' }}" type="name" name="name" value="{{ old('name') }}" placeholder="Alex Smith" required autofocus>
                    </div>
                    @if ($errors->has('name'))
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label class="label">Your email</label>
                    <div class="control">
                        <input id="email" class="input{{ $errors->has('email') ? ' has-error' : '' }}" type="email" name="email" value="{{ old('email') }}" placeholder="e.g. alexsmith@gmail.com" required>
                    </div>
                    @if ($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label class="label">Your password</label>
                    <div class="control">
                        <input id="password" class="input{{ $errors->has('password') ? ' is-error' : '' }}" type="password" name="password" value="{{ old('password') }}" placeholder="********" required>
                    </div>
                    @if ($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                    @endif
                </div>

                <div class="field">
                    <label class="label">Confirm password</label>
                    <div class="control">
                        <input id="password-confirm" class="input" type="password" name="password_confirmation" placeholder="********" required>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-primary" type="submit">Submit</button>
                    </div>
                    <div class="control">
                        <a class="button is-link" href="{{ route('login') }}">Already signed up?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
