<template>
    <a href="" class="answer" @click="alert('hi')">
        <slot></slot>
    </a>
</template>

<style lang="scss">
.answer {
    display: block;
}
</style>

<script>
export default {
    data() {
        return {
            
        }
    },
    
    props: [],
    
    methods: {
        
    }
}
</script>