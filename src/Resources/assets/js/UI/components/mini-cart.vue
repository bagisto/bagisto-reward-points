<template>
    <div :class="`dropdown ${cartItems.length > 0 ? '' : 'disable-active'}`">
        <cart-btn :item-count="cartItems.length"></cart-btn>

        <div
            id="cart-modal-content"
            v-if="cartItems.length > 0"
            class="modal-content sensitive-modal cart-modal-content hide">

            <div class="mini-cart-container">
                <div class="row small-card-container" :key="index" v-for="(item, index) in cartItems">
                    <div class="col-3 product-image-container mr15">
                        <a @click="removeProduct(item.id)">
                            <span class="rango-close"></span>
                        </a>

                        <a class="unset" :href="`${$root.baseUrl}/${item.url_key}`">
                            <div
                                class="product-image"
                                :style="`background-image: url(${item.images.medium_image_url});`">
                            </div>
                        </a>
                    </div>
                    <div class="col-9 no-padding card-body align-vertical-top">
                        <div class="no-padding">
                            <div class="fs16 text-nowrap fw6" v-html="item.name"></div>

                            <div class="fs18 card-current-price fw6">
                                <div class="display-inbl">
                                    <label class="fw5">{{ __('checkout.qty') }}</label>
                                    <input type="text" disabled :value="item.quantity" class="ml5" />
                                </div>
                                <span class="card-total-price fw6">
                                    {{ item.base_total }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <h5 class="col-6 text-left fw6">
                    {{ subtotalText }}
                </h5>

                <h5 class="col-6 text-right fw6 no-padding">{{ cartInformation.base_sub_total }}</h5>
            </div>

             <div class="modal-footer" v-if="reward_points > 0">
                <h5 class="col-6 text-left fw6">
                    Reward Points Awarded  
                </h5>

                <h5 class="col-6 text-right fw6 no-padding">{{ reward_points }}</h5>
            </div>

            <div class="modal-footer">
                <a class="col text-left fs16 link-color remove-decoration" :href="viewCart">{{ cartText }}</a>

                <div class="col text-right no-padding">
                    <a :href="checkoutUrl" @click="checkMinimumOrder($event)">
                        <button
                            type="button"
                            class="theme-btn fs16 fw6">
                            {{ checkoutText }}
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss">
    .hide {
        display: none !important;
    }
</style>

<script>
    export default {
        props: [
            'cartText',
            'viewCart',
            'checkoutUrl',
            'checkoutText',
            'subtotalText',
            'checkMinimumOrderUrl'
        ],
        data: function () {
            return {
                cartItems: [],
                cartInformation: [],
                reward_points: 0,
            }
        },
        mounted: function () {
            this.getMiniCartDetails();
        },
        watch: {
            '$root.miniCartKey': function () {
                this.getMiniCartDetails();
            }
        },
        methods: {
            getMiniCartDetails: function () {
                this.$http.get(`${this.$root.baseUrl}/mini-cart`)
                .then(response => {
                    if (response.data.status) {
                        this.cartItems = response.data.mini_cart.cart_items;
                        this.cartInformation = response.data.mini_cart.cart_details;
                        this.reward_points = response.data.mini_cart.reward_points; 
                    }
                })
                .catch(exception => {
                    console.log(this.__('error.something_went_wrong'));
                });
            },
            removeProduct: function (productId) {
                this.$http.delete(`${this.$root.baseUrl}/cart/remove/${productId}`)
                .then(response => {
                    this.cartItems = this.cartItems.filter(item => item.id != productId);
                    this.$root.miniCartKey++;
                    window.showAlert(`alert-${response.data.status}`, response.data.label, response.data.message);
                })
                .catch(exception => {
                    console.log(this.__('error.something_went_wrong'));
                });
            },
            checkMinimumOrder: function (e) {
                e.preventDefault();
                this.$http.post(this.checkMinimumOrderUrl)
                    .then(({ data }) => {
                        if (! data.status) {
                            window.showAlert(`alert-warning`, 'Warning', data.message);
                        } else {
                            window.location.href = this.checkoutUrl;
                        }
                    });
            }
        }
    }
</script>