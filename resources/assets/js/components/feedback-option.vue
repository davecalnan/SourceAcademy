<template>
	<i class="icon" :title="title" @click="onClick">{{ icon }}</i>
</template>

<style lang="scss">

</style>

<script>
export default {
    data() {
        return {

        }
    },

    props: ['icon', 'title'],

    methods: {
        onClick() {
           Bus.$emit('hideToast');
           this.submitFeedback();
           console.log(this.icon, this.title);
       },

        getUrl() {
            let url = '';
            url += window.location.protocol;
            url += '//api.';
            url += window.env.APP_DOMAIN;
            url += '/feedback/responses';
            return url;
        },

        submitFeedback() {
            let url = this.getUrl();

            axios.post(url, {
                user_id: window.user.id,
                icon: this.icon,
                title: this.title
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    }
}
</script>