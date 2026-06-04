<!-- Mini Cart Vue Component -->
@if (
    core()->getConfigData('reward.general.general.module-status')
    && auth()->guard()->user()
)
    <v-summary-reward :key="refreshPoints"></v-summary-reward>
@endif

@pushOnce('scripts')
    <script type="text/x-template" id="v-summary-reward-template">
        <div class="flex justify-between text-right">
            <p class="text-base max-sm:text-sm max-sm:font-normal">
                @lang('rewards::app.shop.checkout.cart.mini-cart.reward-points-earned')
            </p>
            <p
               class="text-base font-medium max-sm:text-sm max-sm:font-medium"
               v-if = "cart"
               v-text= "cart.reward_points">
            </p>
        </div>
    </script>

    <script type="module">
        app.component("v-summary-reward", {
            template: '#v-summary-reward-template',

            data() {
                return {
                    cart : null,
                    refreshPoints: 1,
                }
            },

            mounted () {
                this.getRewardPoints();
            },

            methods: {
                getRewardPoints() {
                    this.$axios.get(`{{ route('reward.shop.checkout.cart.index') }}`)
                        .then(response => {
                            this.cart = response.data.data;
                            ++ this.refreshPoints;
                        })
                    .catch(error => {});
                },
            }
        })
    </script>
@endpushOnce