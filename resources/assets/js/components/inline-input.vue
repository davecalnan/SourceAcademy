<template>
	<input v-model="value" :placeholder="placeholder" class="inline-input" autofocus>
</template>

<style lang="scss">
.inline-input {
	border: none;
	padding: inherit;
	font: inherit;
	color: inherit;

	&:focus {
		outline: none;
	}
}
</style>

<script>
export default {
	data() {
		return {
			
		}
	},

	props: {
		value: String,
		placeholder: String
	},

	methods: {

	}
}
</script>