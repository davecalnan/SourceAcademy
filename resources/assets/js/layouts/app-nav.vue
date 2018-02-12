<template>
    <nav class="app-nav">
		<a :href="getHomeURL()">
            <img class="app-nav-logo" src="/img/sourceacademy-logo.svg" alt="SourceAcademy Logo">
        </a>
        <hr>
        <a href="/" class="app-nav-link">Home</a>
        <a href="/projects" class="app-nav-link">Projects</a>
        <a v-if="user.type == 'admin'" href="/clients" class="app-nav-link">Clients</a>
        <a v-if="user.type == 'admin'" href="/servers" class="app-nav-link">Servers</a>
        <a :href="getHomeURL('/logout')" class="app-nav-link">Logout</a>
        </div>
    </nav>
</template>

<style lang="scss">
@import '~@/_variables.scss';

.app-nav {
	text-align: center;
	
	&-link {

		&:hover {
			color: darken($brand-primary, 40%);
        }
        
	}
}

@media screen and (max-width: 768px) {
    .app-nav {
        
        &-logo {
            margin: auto;
            width: 60%;
        }
    
        &-link:not(:last-of-type) {
            border-right: 1px solid $brand-dark;
            margin-right: 0.3em;
            padding-right: 0.5em;
        }
    }
}

@media screen and (min-width: 769px) {
	.app-nav {
		height: 100%;

		&-link {
            display: block;
            line-height: 2em;
		}
	}
}
</style>

<script>
export default {
    data() {
        return {
            user: window.user
        }
    },
    
    methods: {
        getHomeURL: path => {
			return window.env.app_url + path
		}
    }
}
</script>