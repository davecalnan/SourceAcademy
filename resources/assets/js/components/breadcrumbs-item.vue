<template>
    <li :class="{ 'is-active': active, 'disabled': href == null }">
        <a :href="href"><slot/></a>
    </li>
</template>

<style lang="scss">
	.breadcrumb a:not([href]) {
		color: inherit;
		cursor: initial;
	}
</style>

<script>
export default {
	props: {
		active: Boolean,
		href: String,
		text: String
	},
	
	data() {
		return {

		}
	},

	methods: {

	}
}
</script>