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
    @foreach ($client->servers as $server)
    <p>{{ $server->name }}</p>
    @endforeach
    <form action="{{ config('app.url')}}/client/{{ $client->slug }}/servers">
        @if (count($client->servers))
        <div class="field">
            <label for="server" class="label">Select Server</label>
            <div class="control">
                <div class="select">
                    <select name="server">
                        @foreach($client->servers as $server)
                        <option value="{{ $server->id }}">{{ $server->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        @endif
        <p class="subtitle">Create new Server</p>
        <div class="field columns">
            <div class="column">
                <label for="server_name" class="label">Server Name</label>
                <div class="control">
                    <input class="input" type="text" name="server_name" value="{{ $client->slug }}-machine">
                </div>
            </div>
            <div class="column">
                <label for="server_size" class="label">Server Size</label>
                <div class="control">
                    <div class="select">
                        <select name="server_size" id="">
                            <option value="512">512MB</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <p class="subtitle">MySQL</p>
        <div class="field columns">
            <div class="column">
                <label for="database_name" class="label">Database Name</label>
                <div class="control">
                    <input class="input" type="text" name="database_name" value="wp_{{ $client->slug }}">
                </div>
            </div>
            <div class="column">
                <label for="database_user" class="label">Database User</label>
                <div class="control">
                    <input class="input" type="text" name="database_user" value="wp_{{ $client->slug }}">
                </div>
            </div>
        </div>
        
        <p class="subtitle">Site</p>
        <div class="field columns">
            <div class="column">
                <label for="site_slug" class="label">Site Slug</label>
                <div class="control">
                    <input class="input" type="text" name="site_slug" value="{{ $client->slug }}.sourceacademysites.com">
                </div>
            </div>
            <div class="column">
                <label for="site_domain" class="label">Site Domain</label>
                <div class="control">
                    <input class="input" type="text" name="site_domain" value="www.{{ $client->slug }}.com">
                </div>
            </div>
        </div>
    </form>
</card>

@endsection