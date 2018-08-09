<template>
    <div ref="typeform" class="typeform-widget"/>
</template>

<style lang="scss">
.typeform-widget {
    background-color: white;
    box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);
    height: 100%;
    width: 100%;
}
</style>

<script>
import * as typeformEmbed from '@typeform/embed'

export default {
    props: [],

    data() {
        return {
            
        }
    },

    mounted() {
        typeformEmbed.makeWidget(this.$refs.typeform, 'https://davecalnan.typeform.com/to/iSFYX1', {
            hideFooter: true,
            onSubmit: function () {
                alert('Submitted')
            }
        })
    }
}
</script>