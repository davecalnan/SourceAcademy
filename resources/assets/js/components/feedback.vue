<template>
	<div class="notification level">
		<span class="level-left">
			<p>{{ content }}</p>
		</span>
		<span class="level-right">
			<span class="level-item">
				<i>{{ callToAction }}</i>
			</span>
			<span class="level-item">
				<slot name="feedback-options"></slot>
			</span>
		</span>
	</div>
</template>

<style lang="scss">

</style>

<script>
export default {
	data() {
		return {

		}
	},

	props: {
		content: String,
		callToAction: String,
		dismissable: Boolean
	},

	methods: {
		hideToast() {
			Bus.$emit('hideToast');
		},
	}
}
</script>