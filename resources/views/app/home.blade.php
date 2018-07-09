@extends('app.master')

@section('meta-title', 'Freelancer App')
@section('page-title', 'Freelancer App')

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
