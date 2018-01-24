<template>
	<section class="toast">
		<div class="toast-body">
			<slot></slot>
		</div>
		<small class="toast-info">{{ info }}</small>
	</section>
</template>

<style lang="scss">
.toast {
	margin: 1.5rem 1.5rem 0;

	&-info {
		float: right;
		margin-top: 0.25rem;
	}

	&-body {
		
	}
}
</style>

<script>
export default {
	data() {
		return {

		}
	},

	props: ['info'],

	methods: {

	}
}
</script>