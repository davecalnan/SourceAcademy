@php
$user = Auth::user();
@endphp

<script>
	window.env = {
		'APP_DOMAIN': '{{ env('APP_DOMAIN') }}'
	}
	window.user = {
	@if(Auth::user())
		created_at: '{{ $user->created_at }}',
		email: '{{ $user->email }}',
		id: '{{ $user->id }}',
		isLoggedIn: true,
		name: '{{ $user->name }}',
		type: '{{ $user->roles()->first()->name }}'
	@endif
	}
</script>
