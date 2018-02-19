<template>
    <form>
        <span v-if="items.length === 1">
            <h1 class="subtitle">{{ items[0].public_name }}</h1>
            <p>{{ items[0].details }}</p>
            <hr>
        </span>
        <div class="field" v-else-if="items.length > 1">
            <label for="item">Subscription:</label>
            <div class="control">
                <select name="item" v-model="item">
                    <option v-for="(item, index) in items" :key="item.id" :value="index">{{ item.public_name }}</option>
                </select>
            </div>
        </div>
        <p v-else>No available items found.</p>
        <button class="button is-primary" type="submit" @click.prevent="open">Purchase</button>
    </form>
</template>

<style lang="scss">
    
</style>

<script>
export default {
    props: {
        items: {
            type: Array,
            default: null
        },
    },

    data() {
        return {
            item: 0
        }
    },
    
    created() {
        window.stripe = StripeCheckout.configure({
            key: window.sourceacademy.stripe_key,
            image: 'https://sourceacademy.co/img/sourceacademy-logo.png',
            locale: 'auto',
            token: token => {
                window.axios.post(window.env.APP_URL + '/subscriptions', {
                    stripeEmail: token.email,
                    stripeToken: token.id,
                    plan: this.items[this.item].private_name
                })
                .then(function (response) {
                    alert('Successful, thank you!')
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
        })
    },
    
    methods: {
        open: function () {
            let item = this.items[this.item]
            window.stripe.open({
                name: item.public_name,
                email: window.user.email,
                description: item.description,
                currency: 'eur',
                amount: item.amount
            })
        }
    }
}
</script>