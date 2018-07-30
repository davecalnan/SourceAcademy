@extends('admin.master')

@section('meta-title', 'Projects')
@section('page-title', 'Projects')

@section('main')

<card title="Projects">
	@if(count($projects))
	<table class="table is-fullwidth is-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Organisation</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($projects as $project)
			<tr>
				<td><a href="{{ route('admin.projects.single', [$slug = $project->slug]) }}">{{ $project->name }}</a></td>
				<td><a href="{{ route('admin.organisations.single', [$id = $project->organisation->id ])}}">{{ $project->organisation->name }}</a></td>
				<td>
					<a href="{{ route('admin.projects.single', [$slug = $project->slug]) }}" class="icon far fa-edit"></a>
					<form action="{{ route('projects.destroy', [$slug = $project->slug]) }}" method="POST" style="display:inline">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="DELETE">
						
						<button class="icon far fa-trash-alt"></button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@else
	<p>No projects found.</p>
	@endif
</card>

<card title="New Project">
	@include('admin.projects.create')
</card>

@endsection