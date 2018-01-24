<template>
    <div class="card">

        <div class="card-header" v-if="this.heading">
            <p class="card-header-title">
                {{ this.heading }}
            </p>
        </div>

        <div class="card-video" v-html="this.media" v-if="this.media"></div>

        <div class="card-content">
            <div class="content">
                <p v-if="this.title" class="title is-4">
                    <a v-if="this.titleLink" :href="this.titleLink">{{ this.title }}</a>
                    <span v-else="this.titleLink">{{ this.title }}</span>
                </p>
                <p class="subtitle is-6" v-if="this.subtitle">
                    {{ this.subtitle }}
                </p>
                <p v-if="this.$slots['links']" class="subtitle is-6" name="links">
                    <slot name="links"/>
                </p>
                <p v-if="this.text">
                    {{ this.text }}
                </p>
                <slot/>
            </div>
        </div>

    </div>
</template>

<style lang="scss">

</style>

<script>
export default {
  data() {
    return {};
  },

  props: [
    'heading',
    'media',
    'subtitle',
    'text',
    'title',
    'titleLink'
  ],

  methods: {}
};
</script>