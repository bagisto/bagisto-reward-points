<!-- Mini Cart Vue Component -->
@if (
    core()->getConfigData('reward.general.general.module-status')
    && auth()->guard()->user()
)
    <v-mini-cart-reward :key="refresh_points"></v-mini-cart-reward>
@endif

@pushOnce('scripts')
    <script type="text/x-template" id="v-mini-cart-reward-template">
        <div class="flex justify-between items-center mt-2 mb-2 border-b px-6 pb-2 border-[#E9E9E9]">
            <p class="text-sm font-medium text-[#6E6E6E]">
                @lang('rewards::app.shop.checkout.cart.mini-cart.reward-points')
            </p>
            
            <p
               class="text-xl font-semibold"
               v-if = "cart"
               v-text= "cart.reward_points">
            </p>
        </div>
    </script>

    <script type="module">
        app.component("v-mini-cart-reward", {
            template: '#v-mini-cart-reward-template',

            data() {
                return {
                    cart : null,
                    refresh_points: 1,
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
                            ++ this.refresh_points;
                        })
                    .catch(error => {});
                },
            }
        })
    </script>
@endpushOnce