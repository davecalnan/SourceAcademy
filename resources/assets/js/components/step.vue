<template>
    <figure class="step">
        <img class="step-image" :src="image" :alt="alt">
        <hr class="step-divider">
        <figcaption>
            <h1 class="step-title">{{ title }}</h1>
            <p class="step-details">{{ details }}</p>
        </figcaption>
    </figure>
</template>

<style lang="scss">
.step {
    text-align: center;

    &-image {
        width: 40%;
    }

    &-divider {
        margin: 2em auto;
        width: 50%;
    }

    &-title {
        font-size: 1.5em;
        font-weight: 600;
        margin-bottom: 0.5em;
        text-transform: uppercase;
    }

    &-details {

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
        'image',
        'alt',
        'title',
        'details'
    ],
    
    methods: {
        
    }
}
</script>