<template>
    <section class="dashboard">
        <slot/>
    </section>
</template>

<style lang="scss">
.dashboard {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1rem;
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