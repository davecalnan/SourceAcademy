<template>
    <div class="steps">
        <slot/>
    </div>
</template>

<style lang="scss">
.steps {
    display: grid;
    grid-column-gap: 2rem;
    grid-template-columns: repeat(4, minmax(200px, 1fr));
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