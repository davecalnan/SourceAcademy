@extends('admin.master')

@section('meta-title', 'Add New Freelancer')
@section('page-title', 'Add New Freelancer')

@section('main')

<card title="Add New Freelancer">
  <form method="POST" action="{{ route('freelancers.store') }}">
    {{ csrf_field() }}

    <div class="columns">

      <div class="column">
        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input id="name" class="input {{ $errors->has('name') ? ' is-error' : '' }}" type="text" name="name" placeholder="Johnny Bravo" required>
          </div>
          @if ($errors->has('name'))
          <p class="help is-danger">{{ $errors->first('name') }}</p>
          @endif
        </div>
      </div>

      <div class="column">
        <div class="field">
          <label class="label">Email</label>
          <div class="control">
            <input id="email" class="input" type="text" name="email" placeholder="jbravo@heyprettymama.com">
          </div>
        </div>
      </div>
    </div>

    <div class="columns">
      <div class="column">
        <div class="field">
          <label class="label">Title</label>
          <div class="control">
            <input id="email" class="input {{ $errors->has('name') ? ' is-error' : '' }}" type="text" name="title" placeholder="Web Developer" required>
          </div>
          @if ($errors->has('name'))
          <p class="help is-danger">{{ $errors->first('name') }}</p>
          @endif
        </div>
      </div>

      <div class ="column">
        <div class="field">
          <label class="label">Project Type</label>
          <div class="control">
            <div class="select {{ $errors->has('type') ? ' is-error' : '' }}">
              <select name="type" required>
                <option value="wordpress" selected>Wordpress</option>
                <option value="shopify">Shopify</option>
                <option value="both">Both</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button class="button is-primary" type="submit">Create</button>
      </div>
    </div>
  </form>
</card>

@endsection
