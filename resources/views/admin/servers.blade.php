@extends('layouts.admin')

@section('title', 'Servers')

@section('header')
<h1 class="app-header-title">Servers</h1>
@endsection

@section('main')

<card title="Servers">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Server ID</th>
                <th>Server Name</th>
                <th>Client</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servers as $server)
            <tr>
                <td>{{ $server->id }}</td>
                <td><a href="/servers/{{ $server->id }}">{{ $server->name }}<a></td>
                {{--  <td><a href="/clients/{{ $server->client->slug }}">{{ $server->client->name }}<a></td>  --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</card>

@endsection