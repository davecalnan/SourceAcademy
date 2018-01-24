<script>
	window.Intercom('trackEvent', 'User Views A Project', {
		'project_id': '{{ $project->id }}',
		'project_name': '{{ $project->name }}',
		'project_type': '{{ $project->type }}'
	});
</script>