<template>
    <div class="search-result">
        <a class="search-result-header" @click="isExpanded = !isExpanded">
            <slot name="question"/>
            <i class="fa fa-angle-down"/>
        </a>
        <div v-if="isExpanded" class="search-result-content">
            <slot name="answer"/>
        </div>
    </div>
</template>

<style lang="scss">
.search-result {
    border-bottom: 1px solid #ccc;
    padding: 1rem;
    width: 100%;

    &-header {
        display: block;
        // width: 100%;
    }
}
</style>

<script>
export default {
    data() {
        return {
            isExpanded: false
        }
    },
    
    props: [],
    
    methods: {
        
    }
}
</script>