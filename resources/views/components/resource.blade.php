<div class="resource column is-one-third">
	<div class="card">

		@isset($image)
		<div class="card-image">
			<img src="">
		</div>
		@endisset

		<header class="card-header">
			<p class="card-header-title">{{ $title }}</p>
			@if (Auth::user()->isAdmin())
			<div class="" style="padding: 0.75rem;">
				<a href="https://admin.{{ env('APP_DOMAIN') }}/resources/{{ $id }}/edit">
					<i class="material-icons">edit</i>
				</a>
				<a href="https://admin.{{ env('APP_DOMAIN') }}/resources/{{ $id }}/delete" onClick="confirm('Are you sure you want to delete?')">
					<i class="material-icons">delete</i>
				</a>
			</div>
			@endif
		</header>

		<div class="card-content">
			<p class="resource-content">{{ $content }}</p>
		</div>

		@isset($link)
		<footer class="card-footer">
			<a class="card-footer-item" href="{{ $link }}" class="resource-link">{{ $link }}</a>
		</footer>
		@endisset

	</div>
</div>