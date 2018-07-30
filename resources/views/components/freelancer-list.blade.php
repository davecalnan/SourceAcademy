@if(count($freelancers))
<table class="table is-fullwidth is-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Title</th>
			<th>Shopify</th>
			<th>Wordpress</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($freelancers as $freelancer)
		<tr>
			<td>{{ $freelancer->name }}</td>
			<td>{{ $freelancer->email }}</td>
			<td>{{ $freelancer->title }}</td>
			<td><?php if ($freelancer->shopify == 1): ?>Yes<?php else: ?>No<?php endif; ?></td>
			<td><?php if ($freelancer->wordpress == 1): ?>Yes<?php else: ?>No<?php endif; ?></td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
<p>No users found.</p>
@endif
