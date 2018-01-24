@extends('app')

@section('title', 'App Home')

@section('header')
<h1 class="title">
	Hi, 
	@isset(Auth::user()->name)
	{{Auth::user()->name}}.
	@else
	there.
	@endisset
</h1>
@endsection

@section('main')
<section class="section">
	
	<p class="title">Well hello there.</p>
	<p>
		Welcome to the first version of the SourceAcademy platform. The point here is to put everything in one place and keep everyone up to date.
	</p>
	<p>
		I've built this from scratch so there may be some rough edges - please let me know so I can improve things!
	</p>

	<hr>

	<p class="subtitle">
		Basically how it works...
	</p>
	<p>
		Everyone has access to their relevant projects. <em>Projects</em> have <em>assets</em> (things which have been created by <em>freelancers</em> as part of the project - e.g. websites) and <em>resources</em> (things that are helpful to be shared - e.g. helpful links).
	</p>

	<hr>

	<p style="margin-bottom: 1em">
		Jump in and let me know how you get on - Dave.
	</p>

	<a class="button is-primary" href="{{ route('app.projects.index') }}">View your projects</a>
	<a class="button is-primary is-outlined" href="{{ route('password.update') }}">Update your password</a>

</section>
@endsection

@section('footer')
@parent
@endsection

@section('modal')
@include('components.update-password-form-modal')
@endsection
