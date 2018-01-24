<template>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="/">
                <img class="navbar-logo" src="/img/sourceacademy-logo.svg" alt="SourceAcademy Logo">
            </a>
        </div>
        <div class="navbar-menu">
            <!-- <a href="" class="navbar-link">Home</a> -->
            <a v-if="user.isLoggedIn" class="navbar-link" href="/logout">Logout</a>
            <a v-if="user.isLoggedIn" class="navbar-link button is-primary is-outlined" href="https://app.sourceacademy.co">Dashboard</a>
            <a v-if="!user.isLoggedIn" class="navbar-link" href="/login">Login</a>
            <a v-if="!user.isLoggedIn" class="navbar-link button is-primary is-outlined" href="/signup">Signup</a>
        </div>
    </nav>
</template>

<style lang="scss">
    .navbar {
        align-items: center;
        border-bottom: 1px solid #ccc;
        color: #4a4a4a;
        display: flex;
        height: 3rem;
        justify-content: space-between;
        padding: 0 5%;

        &-brand {
            height: 2rem;
        }

        &-logo {
            height: 2rem;
        }

        &-menu {
            align-items: center;
            display: flex;
        }

        &-link {
            color: inherit;

            &:not(:first-of-type) {
                margin-left: 0.5em;
            }
        }
    }
</style>

<script>
import { mapState } from 'vuex'

export default {
    data() {
        return {
            
        }
    },
    
    // computed: {
    //     user () {
    //         if (window.user)
    //             return window.user
    //         return {}
    //     }
    // },
    computed: mapState(['user']),
    
    props: [],
    
    methods: {
        
    }
}
</script>