@php
$user = Auth::user();
@endphp

<script>
	window.sourceacademy = {
		csrf_token: "{{ csrf_token() }}",
		stripe_key: "{{ config('services.stripe.key') }}"
	}
	window.env = {
		'APP_DOMAIN': '{{ env('APP_DOMAIN') }}',
		'APP_URL': '{{ env('APP_URL') }}'
	}
	window.user = {
	@if(Auth::user())
		created_at: '{{ $user->created_at }}',
		email: '{{ $user->email }}',
		id: '{{ $user->id }}',
		isLoggedIn: true,
		name: '{{ $user->name }}',
		@if(count($user->roles))
		type: '{{ $user->roles()->first()->name }}'
		@endif
	@endif
	}
</script>
