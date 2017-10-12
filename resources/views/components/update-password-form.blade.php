@section('form-title')
Update Password
@endsection

@section('form-body')
@if (Session::has('success'))
<div class="notification is-success">
    {!! Session::get('success') !!}
</div>
@endif
@if (Session::has('failure'))
<div class="notification is-danger">
    {!! Session::get('failure') !!}
</div>
@endif

<form method="POST" action="{{ route('password.update') }}">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Current Password</label>
        <div class="control">
            <input id="old" class="input {{ $errors->has('old') ? ' is-error' : '' }}" type="password" name="old" value="{{ old('old') }}" placeholder="********" required autofocus>
        </div>
        @if ($errors->has('old'))
        <p class="help is-danger">{{ $errors->first('old') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">New password</label>
        <div class="control">
            <input id="password" class="input {{ $errors->has('password') ? ' is-error' : '' }}" type="password" name="password" value="{{ old('password') }}" placeholder="********" required>
        </div>
        @if ($errors->has('password'))
        <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Confirm password</label>
        <div class="control">
            <input id="password_confirmation" class="input {{ $errors->has('password_confirmation') ? ' is-error' : '' }}" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="********" required>
        </div>
        @if ($errors->has('password_confirmation'))
        <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
        @endif
    </div>

@endsection

@section('form-footer')
    <div class="field">
        <div class="control">
            <button class="button is-primary" type="submit">Submit</button>
        </div>
    </div>

</form>
@endsection
