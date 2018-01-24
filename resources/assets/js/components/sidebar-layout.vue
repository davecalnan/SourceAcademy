<template>
    <section class="sidebar-container">
        <header class="header">
            <slot name="header"/>
        </header>
        <aside class="sidebar card">
            <slot name="sidebar"/>
        </aside>
        <main class="main">
            <slot name="main"/>
        </main>
    </section>
</template>

<style lang="scss">
    .sidebar-container {
        display: grid;
        grid-template-areas:
            "header"
            "sidebar"
            "main"
            "footer";
        margin: 0 10%;

        & > .header {
            grid-area: header;
            margin: 1rem;
        }

        & > .sidebar {
            grid-area: sidebar;
            margin: 1rem;
        }

        & > .main {
            grid-area: main;
        }

        & > .footer {
            grid-area: footer;
        }
    }

    @media screen and (min-width: 800px) {
        .sidebar-container {
            grid-template-areas:
                "header header"
                "sidebar main"
                "footer footer";
            grid-template-columns: minmax(100px, 300px) minmax(400px, auto);

            & > .sidebar {
                margin: 0 0 1rem 0;
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
    
    methods: {
        
    }
}
</script>