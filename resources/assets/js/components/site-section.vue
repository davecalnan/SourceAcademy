<template>
    <section class="site-section section">
        <h1 class="site-section-title">{{ title }}</h1>
        <h3 class="site-section-subtitle" v-if="subtitle">{{ subtitle }}</h3>
        <slot/>
    </section>
</template>

<style lang="scss">
@import '~@/_variables.scss';

.site-section {
    background-color: #ffffff;
    padding-bottom: 4rem;

    &-title {
        text-align: center;
        font-size: 2em;
        font-weight: 800;
        margin: 1em auto 2em;
    }

    &-subtitle {
        text-align: center;
        font-size: 1.5em;
        font-weight: 400;
        margin: -3em auto 2em;
    }

    &.has-background-light {
        background: $background-light;
    }

    &:last-of-type {
        padding-bottom: 3rem;
    }

    & p {
        padding-bottom: 1.5rem;
    }
}
</style>

<script>
export default {
    data() {
        return {
            
        }
    },
    
    props: [
        'title',
        'subtitle'
    ],
    
    methods: {
        
    }
}
</script>