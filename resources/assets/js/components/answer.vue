<template>
    <a @click="alert('hi')">
        <slot/>
    </a>
</template>

<style lang="scss">
.answer {
    display: block;
}
</style>

<script>
export default {
    props: {
        result: {
            type: Object,
            default: null
        }
    },

    data() {
        return {
            
        }
    },
    
    methods: {
        
    }
}
</script>