@extends('admin.master')

@section('meta-title')
{{ $project->name }}
@endsection

@section('page-title')
Project: {{ $project->name }}
<a href="{{ route('admin.projects.edit', ['slug' => $project->slug]) }}">(Edit)</a>
@endsection

@section('main')

<card title="Organisation: {{ $project->organisation->name }}">
	<p>
		Customer: <a href="{{ route('admin.users.single', ['id' => $project->customer->id]) }}">{{ $project->customer->name }}</a> |

		@if (count($project->admins) > 1)
		Admins:
		@else
		Admin:
		@endif
		@foreach ($project->admins as $admin)
		<a href="{{ route('admin.users.single', ['id' => $admin->id]) }}">{{ $admin->name }}</a>@unless($loop->last), @endunless
		@endforeach | 

		@if (count($project->freelancers) > 1)
		Freelancers:
		@else
		Freelancer:
		@endif
		@foreach ($project->freelancers as $freelancer)
		<a href="{{ route('admin.users.single', ['id' => $freelancer->id]) }}">{{ $freelancer->name }}</a>@unless($loop->last), @endunless
		@endforeach
	</p>
</card>

{{-- Leave this out for now. --}}
{{-- <card title="Add users to the project">
	<form action="{{ route('projects.update', ['slug' => $project->slug]) }}" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PATCH">

		<div class="field">
			<label class="label">Users</label>
			<div class="control">
				<div class="select {{ $errors->has('type') ? ' is-error' : '' }}">
					<select name="users[]" multiple>
						@foreach ($users as $user)
							<option value="{{ $user->id }}">
								@if (array_search($user->id, (array) $users))
								selected
								@endif
								{{ $user->name }}
							</option>
						@endforeach
					</select>
				</div>
			</div>
			@if ($errors->has('role'))
			<p class="help is-danger">{{ $errors->first('users[]') }}</p>
			@endif
		</div>
		
		<div class="field">
			<div class="control">
				<button class="button is-primary" type="submit">Update</button>
			</div>
		</div>
	</form>
</card> --}}

@endsection

@section('footer')
@parent
@endsection
