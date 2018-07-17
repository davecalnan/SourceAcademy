<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Welcome to SourceAcademy 🎉</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/css/vendor.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>
	<div id="app" class="fullscreen-container">
		<onboarding
		name="{{ $query->name }}"
		email="{{ $query->email }}"
		project-name="{{ $query->projectName }}"
		project-type="{{ $query->projectType }}"
		>
		</onboarding>

	</div>

	@include('window')

	@if(env('APP_ENV') == 'production')
	@include('site.google-analytics')
	@endif

	@include('intercom')
	
	<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>