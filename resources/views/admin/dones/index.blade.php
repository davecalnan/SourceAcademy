@extends('admin.master')

@section('meta-title', 'Activity Feed')
@section('page-title', 'Activity Feed')

@section('main')

<card title="Type /done in the #done channel in Slack to log it here.">
    @if(count($dones))
    <table class="table is-fullwidth is-striped">
        <tbody>
            @foreach ($dones as $done)
            <tr>
                <td><strong>{{ '@'.$done->user_name }}:</strong> {{ $done->text }} <small style="float: right"><em>{{ $done->created_at->diffForHumans() }}</em></small></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No activity found.</p>
    @endif

    {{ $dones->links() }}
</card>

@endsection