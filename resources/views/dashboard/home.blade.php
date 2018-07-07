@extends('layouts.platform')

@section('title', 'Dashboard')

@section('header')
<h1 class="app-header-title">
	Dashboard
</h1>
@endsection

@section('main')
<dashboard>
	<card class="projects "title="Projects">
		<table class="table is-striped">
			@foreach($projects as $project)
			<tr>
				<td><a href="/projects/{{$project->slug}}">{{ $project->name}}</a></td>
			</tr>
			@endforeach
		</table>
	</card>
</dashboard>
@endsection
