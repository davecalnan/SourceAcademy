@extends('dashboard.master')

@section('meta-title', 'Dashboard')

@section('page-title', 'Dashboard')

@section('main')
<card title="Welcome to SourceAcademy, {{ Auth::user()->name }}."></card>
<card class="projects" title="Projects">
	<table class="table is-striped">
		@foreach($projects as $project)
		<tr>
			<td><a href="/projects/{{$project->slug}}">{{ $project->name}}</a></td>
		</tr>
		@endforeach
	</table>
</card>
@endsection
