@extends('layouts.platform')

@section('title')
{{ $server->name }}
@endsection

@section('header')
<h1 class="app-header-title">{{ $server->name }}</h1>
@endsection

@section('main')

<card title="Details">
    <table class="table is-striped is-fullwidth">
        <tbody>
            <tr>
                <th>Organisation</th>
                <td><a href="/organisations/{{ $organisation->slug }}">{{ $organisation->name }}</a></td>
            </tr>
            <tr>
                <th>id</th>
                <td>{{ $server->id }}</td>
            </tr>
            <tr>
                <th>name</th>
                <td>{{ $server->name }}</td>
            </tr>
            <tr>
                <th>credentialId</th>
                <td>{{ $server->credentialId }}</td>
            </tr>
            <tr>
                <th>size</th>
                <td>{{ $server->size }}</td>
            </tr>
            <tr>
                <th>region</th>
                <td>{{ $server->region }}</td>
            </tr>
            <tr>
                <th>ipAddress</th>
                <td>{{ $server->ipAddress }}</td>
            </tr>
            <tr>
                <th>privateIpAddress</th>
                <td>{{ $server->privateIpAddress }}</td>
            </tr>
            <tr>
                <th>phpVersion</th>
                <td>{{ $server->phpVersion }}</td>
            </tr>
            <tr>
                <th>blackfireStatus</th>
                <td>{{ $server->blackfireStatus }}</td>
            </tr>
            <tr>
                <th>papertrailStatus</th>
                <td>{{ $server->papertrailStatus }}</td>
            </tr>
            <tr>
                <th>isReady</th>
                <td>{{ $server->isReady }}</td>
            </tr>
            <tr>
                <th>revoked</th>
                <td>{{ $server->revoked }}</td>
            </tr>
            <tr>
                <th>createdAt</th>
                <td>{{ $server->createdAt }}</td>
            </tr>
            <tr>
                <th>network</th>
                <th>
                    <ul>
                        @foreach ($server->network as $network)
                            <li>{{ $network }}</li>
                        @endforeach
                    </ul>
                </th>
            </tr>
        </tbody>
    </table>
</card>

<card title="Sites">
    <table class="table is-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>status</th>
                <th>app</th>
                <th>appStatus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sites as $site)
            <tr>
                <td>{{ $site->id }}</td>
                <td>{{ $site->name }}</td>
                <td>{{ $site->status }}</td>
                <td>{{ $site->app }}</td>
                <td>{{ $site->appStatus }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</card>

@endsection