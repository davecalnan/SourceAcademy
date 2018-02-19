<template>
    <div class="app">
        <slot/>
    </div>
</template>

<style lang="scss">
@import '~@/_variables.scss';

.app {
    display: grid;
    grid-template-areas:
        "nav"
        "header"
        "main";
    min-height: 100vh;

    &-nav {
        grid-area: nav;
        padding: 1em;
    }

    &-header {
        background: $brand-primary;
        color: #fff;
        grid-area: header;
        padding: 0.54em 14em;

        &-title {
            color: #fff;
            display: inline-block;
            font-size: 2em;
            margin-right: 1em;
        }
    }

    &-main {
        background: $background-light;
        grid-area: main;
        padding: 1rem 0;
    }

    &-footer {
        border-top: 1px solid #ccc;
        grid-area: footer;
        text-align: center;
    }
}

@media screen and (max-width: 768px) {
    .app {
        grid-template-rows: auto auto 1fr;
    }
}

@media screen and (min-width: 769px) {
    .app {
        grid-template-areas:
            "nav header"
            "nav main";
        grid-template-columns: 1fr 4fr;
        grid-template-rows: auto 1fr auto;

        &-nav {
            border-right: 1px solid #ccc;
            padding-top: 5rem;
        }

        &-header {
            padding: 1rem 2rem;
        }

        &-main {
            height: calc(100vh - 5rem);
            overflow-y: auto;
            padding: 1rem;
        }

        &-footer {

        }
    }
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