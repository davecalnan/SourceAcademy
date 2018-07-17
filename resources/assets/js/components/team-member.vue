<template>
    <article class="media">
        <div class="media-content has-text-centered">
            <img :src="image" :alt="name" v-if="image">
            <h1 class="title" v-if="name">{{ name }}</h1>
            <h2 class="subtitle" v-if="position">{{ position }}</h2>
            <p v-if="bio">
                {{ bio }}
            </p>
            <br v-if="bio">
            <a class="button is-primary" :href="'mailto:' + email" v-if="email">
                <span class="icon is-small">
                    <i class="fas fa-envelope"/>
                </span>
                <span>Email</span>
            </a>
            <a class="button is-primary is-outlined" :href="'tel:' + phone" v-if="phone">
                <span class="icon is-small">
                    <i class="fas fa-phone"/>
                </span>
                <span>Phone</span>
            </a>
        </div>
    </article>
</template>

<style lang="scss" scoped>
    img {
        border-radius: 50%;
        margin: 0 10% 1rem;
        width: 80%;
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
        'name',
        'position',
        'bio',
        'email',
        'phone'
    ],
    
    methods: {
        
    }
}
</script>