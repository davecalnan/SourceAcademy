<template>
    <article class="testimonial box">
        <div class="testimonial-head">
            <img class="testimonial-photo" :src="clientPicture" :alt="clientName">
            <div class="testimonial-details">
                <div class="testimonial-client">
                    <h1 class="title">{{ clientName }}</h1>
                    <h2 class="subtitle">{{ clientPosition }}, {{ clientCompany }}</h2>
                </div>
                <img class="testimonial-logo" :src="clientLogo" :alt="clientCompany + 'Logo'">
            </div>
        </div>
        <blockquote class="testimonial-quote" v-if="clientQuote">
            <p v-for="(paragraph, index) in clientQuote" :key="index">{{ paragraph }}</p>
        </blockquote>
        <div class="testimonial-buttons">
            <a class="button is-primary" :href="projectUrl" target="_blank">View Website</a>
            <a class="button is-text" :href="freelancerUrl">Website developed by {{ freelancerName }}</a>
        </div>
    </article>
</template>

<style lang="scss">
@import '~@/_variables.scss';

.testimonial {
    align-items: flex-start;
    display: flex;
    flex-direction: column;

    &.box:not(:last-child) {
        margin-bottom: 0;
    }

	&-head {
        display: flex;
        height: 128px;
        margin-bottom: 1rem;
        width: 100%;
    }

    &-photo {
        height: 128px;
        width: auto;
    }

    &-details {
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        height: 128px;
        justify-content: space-between;
        margin-left: 1rem;
        width: 100%;
    }

    &-client {

        & .subtitle {
            margin-bottom: 0;
        }
    }

    &-logo {
        // align-self: flex-start;
        height: 5rem;
    }

	&-quote  {
        border-left: lighten($brand-primary, 30) solid 5px;
        font-style: italic;
        line-height: 1.6em;
        margin-bottom: 1em;
        padding-left: 1em;

        & p:first-of-type::before {
            content: "\"";
            font-size: 1.6em;
            font-weight: 800;
            margin-right: 0.5em;
        }

        & p:not(:last-of-type) {
            padding-bottom: 0.5em;
        }

        & p:last-of-type::after {
            content: "\"";
            font-size: 1.6em;
            font-weight: 800;
            margin-left: 0.5em;
        }
    }

    &-buttons {
        display: flex;
        flex-grow: 1;
        align-items: flex-end;
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
        'clientPicture',
        'clientName',
        'clientLogo',
        'clientCompany',
        'clientPosition',
        'clientQuote',
        'projectUrl',
        'freelancerUrl',
        'freelancerName'
    ],
    
    methods: {
        
    }
}
</script>