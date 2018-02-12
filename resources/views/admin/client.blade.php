@extends('layouts.admin')

@section('title')
{{ $client->name }}
@endsection

@section('header')
<h1 class="app-header-title">{{ $client->name }}</h1>
@endsection

@section('main')

<card title="Details">
    <form action="{{ config('app.url') }}/clients/{{ $client->slug }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="field columns">
            <div class="column">
                <label for="name" class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" value="{{ $client->name }}">
                </div>
            </div>
            <div class="column">
                <label for="slug" class="label">Slug</label>
                <div class="control">
                    <input class="input" type="text" name="slug" value="{{ $client->slug }}">
                </div>
            </div>
        </div>
        <button class="button is-primary" type="submit">Update</button>
    </form>
</card>

<card title="Users">
    @foreach($client->users as $user)
    <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
    @endforeach
</card>

<card title="Servers">
    @if (count($client->servers))
    <ul>
        @foreach ($client->servers as $server)
        <li><a href="/servers/{{ $server->id }}">{{ $server->name }}</a></li>
        @endforeach
    </ul>
    @endif

    <hr>

     <p class="subtitle">Create new Server</p>
     
    <form action="/clients/{{ $client->slug }}/setupwordpress" method="POST">
        {{ csrf_field() }}
        <div class="field columns">
            <div class="column">
                <label for="slug" class="label">Server Slug</label>
                <div class="control">
                    <input class="input" type="text" name="slug" value="{{ $client->slug }}">
                </div>
            </div>
            <div class="column">
                <label for="size" class="label">Server Size</label>
                <div class="control">
                    <div class="select">
                        <select name="size" id="">
                            <option value="512MB" selected>512MB</option>
                            <option value="1GB">1GB</option>
                        </select>
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