<template>
    <div class="card">
        <div class="card-content">
            <img class="card-profile-picture" src="http://placehold.it/64x64" :alt="sourceror.name + '\'s Profile Picture'">
            <div class="card-text">
                <h4 class="title is-4">{{ sourceror.name }}</h4>
                <h6 class="subtitle is-6" v-if="sourceror.title">{{ sourceror.title }}</h6>
            </div>
            <div class="card-icons">
                <img v-if="sourceror.wordpress" class="icon" src="/img/wordpress-icon.svg" alt="">
                <img v-if="sourceror.shopify" class="icon" src="/img/shopify-icon.svg" alt="">
            </div>
        </div>
        <footer class="card-footer">
            <a class="card-footer-item" :href="'/sourcerors/'+sourceror.id">View Profile</a>
            <a class="card-footer-item" :href="'/sourcerors/'+sourceror.id">Hire {{ sourceror.name | firstName }}</a>
        </footer>
    </div>
</template>

<style lang="scss" scoped>
    .card {
        margin: 0 1rem 1rem 1rem;

        &-content {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            // grid-template-areas:
            //     "profile-picture text"
            //     "icons text";
            // grid-template-columns: repeat(auto-fit, minmax(auto, 1fr));
            // justify-content: space-between;
        }

        &-profile-picture {
            border-radius: 50%;
            height: 4em;
            width: auto;
        }

        &-text {
            margin-left: 1rem;
        }

        &-icons {
            justify-self: center;
        }

        &-icon {
            height: 2rem;
            width: auto;
            display: inline-block;
        }
    }

    @media screen and (min-width: 480px) {
        .card {

            &-content {
                grid-template-areas: "profile-picture text icons"
            }

            &-icons {
                justify-self: flex-end;
            }
        }
    }
</style>

<script>
export default {
    props: {
        sourceror: {
            type: Object,
            default: null
        }
    },

    data() {
        return {
            
        }
    },
        
    methods: {
        
    },
}
</script>