@extends('layouts.platform')

@section('header')
<h1 class="app-header-title">Project: {{ $project->name }}</h1>
@endsection

@section('main')

<card>
	@include('components.project-user-list')
</card>

@if ($project->type == 'wordpress_basic')
	<card title="Set Up Wordpress Site">
		<form action="">
			<div class="columns">
				<div class="column">
					Slug
					<input type="text" placeholder="corkfoundation">
				</div>
				<div class="column">
					Select server
					<select>
						<option>Server</option>
					</select>
				</div>
			</div>

		</form>
	</card>
@endif

@endsection