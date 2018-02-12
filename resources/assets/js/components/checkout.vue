<template>
    <form action="/subscriptions" method="POST" id="checkout">
        <input type="hidden" name="stripeToken" v-model="stripeToken">
        <input type="hidden" name="stripeEmail" v-model="stripeEmail">

        <button type="submit" @click.prevent="open">Buy</button>
    </form>
</template>

<style lang="scss">
    
</style>

<script>
export default {
    props: [],

    data() {
        return {
            stripeToken: '',
            stripeEmail: ''
        }
    },
    
    created() {
        this.stripe = StripeCheckout.configure({
            key: window.sourceacademy.stripeKey,
            image: 'https://sourceacademy.co/img/sourceacademy-logo.png',
            locale: 'auto',
            token: token => {
                this.stripeToken = token.id
                this.stripeEmail = token.email

                this.submit()
            }
        })
    },
    
    methods: {
        open: () => {
            this.stripe.open({
                name: 'Hosting',
                description: 'Hosting',
                currency: 'eur',
                amount: 1000
            })
        },

        submit: () => {
            window.axios.post('/subscriptions', {
                stripeToken: this.stripeToken,
                stripeEmail: this.stripeEmail
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