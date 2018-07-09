<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		@section('title')
		SourceAcademy
		@show
	</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="/css/vendor.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>
	<main id="app" class="fullscreen-container">
		<div class="level">
			<div class="level-left">
				<h1 class="title level-item">@yield('title')</h1>
			</div>
			<div class="level-right">
				<breadcrumbs>
					@yield('breadcrumbs')
					@foreach($stepsArray as $key => $step)
					<breadcrumbs-item
						@if ($step['completed'])
						href="/signup/{{ $key }}"
						@endif
						@if(Request::path() == 'signup/'.$key)
						active
						@endif
					>
						{{ title_case($key) }}
					</breadcrumbs-item>
					@endforeach
				</breadcrumbs>
			</div>
		</div>

		<h2 class="subtitle">@yield('subtitle')</h2>

		@yield('content')
	</main>

	@include('window')

	@if(env('APP_ENV') == 'production')
	@include('scripts.google-analytics')
	@endif

	@include('scripts.intercom')

	<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>