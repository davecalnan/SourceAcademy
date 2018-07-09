@if(Auth::user())
@php
	$hash = hash_hmac(
		'sha256',
		Auth::user()->id,
		env('INTERCOM_SECRET_KEY')
	);
@endphp
@else
@php
	$hash = '';
@endphp
@endif

<script>
	window.intercomSettings = {
		app_id: '{{ env('INTERCOM_APP_ID') }}',
		// user_id: window.user.id ? window.user.id : '',
		// name: window.user.name,
		// email: window.user.email,
		// created_at: window.user.created_at,
		// user_hash: '{{ $hash }}',
		// 'User Type': window.user.type
	};
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/i3lrdyjb';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
