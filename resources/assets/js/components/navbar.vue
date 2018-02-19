<template>
    <nav class="navbar" :class="{ 'is-primary': isPrimary }">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img class="navbar-logo" src="/img/sourceacademy-logo-white.svg" alt="SourceAcademy Logo">
            </a>
            <div class="navbar-burger"
                 :class="{ 'is-active': navbarMenuVisibility }"
                 @click="navbarMenuVisibility = !navbarMenuVisibility">
                <span/>
                <span/>
                <span/>
            </div>
        </div>
        <div class="navbar-menu"
             :class="{ 'is-active': navbarMenuVisibility }">
            <div class="navbar-end">
                <!-- <a href="/freelancers" class="navbar-item">Student Freelancers</a> -->
                <!-- <a href="/projects" class="navbar-item">Happy Clients</a> -->
                <a href="/about" class="navbar-item">About</a>
                <a v-if="user.isLoggedIn" class="navbar-item" href="/logout">Logout</a>
                <div class="navbar-item">
                    <div class="field">
                        <p class="control">
                            <a v-if="user.isLoggedIn"
                               class="button"
                               :class="{ 'is-primary is-inverted': isPrimary }"
                               :href="'//app.' + getDomain()">Dashboard</a>
                            <a v-if="!user.isLoggedIn"
                               class="button"
                               :class="{ 'is-primary is-inverted': isPrimary }"
                               href="/signup">Signup</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<style lang="scss">
@import '~@/_variables.scss';

.navbar {

    &-logo {
        height: 2em;
    }
}

@media screen and (min-width: 1024px) {
    .navbar {
        padding: 0 5%;
    }
}
</style>

<script>
import { mapState } from 'vuex'

export default {
    data() {
        return {
            navbarMenuVisibility: false
        }
    },
    
    computed: mapState(['user']),
    
    props: [
        'isPrimary'
    ],
    
    methods: {
        getDomain() {
            return window.env.app_domain
        }
    }
}
</script>