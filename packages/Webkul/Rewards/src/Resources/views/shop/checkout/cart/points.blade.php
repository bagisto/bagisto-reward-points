<!-- Points Vue Component -->
@php
  $cart = cart()->getCart();
  
  $cart["reward_points"] = null;

  $applyCheckCart = app('\Webkul\Rewards\Repositories\RedemptionSettingRepository')->first();
@endphp

@if (
    ((request()->is('checkout/cart') && ! empty($applyCheckCart->redemp_over_subtotal))
    || (request()->is('checkout/onepage') && ! empty($applyCheckCart->apply_points_checkout))) 
    &&  (! empty($applyCheckCart->points) && ! empty($applyCheckCart->conversion_rate))
)
    <!-- Reward summary -->
    @if (
        core()->getConfigData('reward.general.general.module-status')
        && auth()->guard('customer')->user()
        && $cart
    )
        @inject('rewardPointRepository', 'Webkul\Rewards\Repositories\RewardPointRepository')
        @inject('redemptionSettingRepository', 'Webkul\Rewards\Repositories\RedemptionSettingRepository')

        @php
            $totalrewardpoints = 0;
            
            if (
                core()->getConfigData('reward.general.general.module-status')
                && auth()->guard('customer')->user()
            ) {
                $totalrewardpoints = $rewardPointRepository->totalRewardPoints(auth()->guard('customer')->user()->id);
            }

            $redemptionSetting = '';
            
            if ($redemption = $redemptionSettingRepository->getData()) {
                if ($redemption->conversion_rate) {
                    $redemptionSetting = trans('rewards::app.checkout.onepage.redemption-setting', ['points' => $redemption->points, 'conversion_rate' => core()->formatPrice($redemption->conversion_rate)]);
                }
            }
        @endphp

        <v-points :sub-total="cart.formatted_sub_total"></v-points>

        @pushOnce('scripts')
            <script 
                type="text/x-template" 
                id="v-points-template" 
                v-if="{{ auth()->guard('customer')->user()->id }}"
            >
                <div class="flex justify-between text-right">
                    <p class="text-4 max-sm:text-4 max-sm:font-normal">
                        @{{ rewardApplied ? "@lang('rewards::app.shop.checkout.cart.points.reward-points')" : "@lang('rewards::app.shop.checkout.cart.points.reward-points')" }}
                    </p>

                    <p class="text-4 max-sm:text-3.5 font-medium">
                        <!-- Apply points modal -->
                        <x-shop::modal ref="RewardModel">
                            <!-- Modal Toggler -->
                            <x-slot:toggle>
                                <span
                                    class="cursor-pointer text-[#0A49A7]"
                                    v-if="! rewardApplied"
                                >
                                    @lang('rewards::app.shop.checkout.cart.points.apply-points')
                                </span>
                            </x-slot:toggle>

                            <!-- Modal Header -->
                            <x-slot:header>
                                <h2 class="max-sm:text-3 text-[25px] font-medium">
                                    @lang('rewards::app.shop.checkout.cart.points.apply-points')
                                </h2>
                            </x-slot:header>

                            <!-- Modal Contentd -->
                            <x-slot:content>
                                <!-- Apply Points Form -->
                                <x-shop::form
                                    v-slot="{ meta, errors, handleSubmit }"
                                    as="div"
                                >
                                    <!-- Apply Points form -->
                                    <form @submit="handleSubmit($event, applyPoints)">
                                        <x-shop::form.control-group>
                                            <div class="bg-white p-[30px]">
                                                <x-shop::form.control-group.control
                                                    type="text"
                                                    name="points"
                                                    class="px-[25px] py-[20px]"
                                                    :placeholder="trans('rewards::app.shop.checkout.cart.points.enter-points')"
                                                    v-model="inputPoints"
                                                >
                                                </x-shop::form.control-group.control>

                                                <p 
                                                    style="color:#f22020;" 
                                                    class="ml-1 flex flex-wrap items-center justify-between gap-[15px] text-sm italic"
                                                >
                                                    @{{ errorMessage }}
                                                </p>
                                            </div>
                                        </x-shop::form.control-group>

                                        <div class="flex items-center gap-4 flex-wrap">
                                            <div class="flex gap-4 items-center">
                                                <p class="text-sm font-medium text-[#6E6E6E]">
                                                    @lang('shop::app.checkout.coupon.subtotal')
                                                </p>
        
                                                <p 
                                                    class="text-3xl font-semibold max-sm:text-xl" 
                                                    v-text="subTotal"
                                                >
                                                </p>
                                            </div>
        
                                            <x-shop::button
                                                class="primary-button flex-auto max-w-none py-3 px-11 rounded-2xl"
                                                :title="trans('shop::app.checkout.coupon.button-title')"
                                            />

                                            <p class="text-xl font-semibold max-sm:text-xl">
                                                @lang('rewards::app.checkout.onepage.total-point', ['total_reward_points' => $totalrewardpoints ])
                                                <i>({{ $redemptionSetting }})</i>
                                            </p>
                                        </div>
                                    </form>
                                </x-shop::form>
                            </x-slot:content>
                        </x-shop::modal>

                        <!-- Applied Points Information Container -->
                        <div
                            class="font-small flex items-center justify-between text-xs"
                            v-if="rewardApplied"
                        >
                            <p
                                class="text-navyBlue cursor-pointer text-base font-medium"
                                title="@lang('shop::app.checkout.cart.coupon.applied')"
                            >
                                @{{ appliedPoints }}
                            </p>

                            <span
                                class="icon-cancel cursor-pointer text-2xl"
                                title="@lang('shop::app.checkout.cart.coupon.remove')"
                                @click="removePoints"
                            >
                            </span>
                        </div>
                    </p>
                </div>
            </script>

            <script type="module">
                app.component('v-points', {
                    template: '#v-points-template',

                    props: ['subTotal'],

                    data() {
                        return {
                            isCartPage: Boolean("{{ request()->route()->getName() === 'shop.checkout.cart.index' }}"),
                            inputPoints: '',
                            errorMessage: '',
                            rewardApplied : "{{ $cart->points }}",
                            appliedPoints: "{{ $cart->points }}",
                            routeName: "{{ request()->route()->getName() }}",
                            cart: null,
                        }
                    },

                    watch: {
                            inputPoints: function (value) {
                                if (value != '') {
                                    this.errorMessage = '';
                                }
                            },
                        },

                    methods: {
                        applyPoints(params, { resetForm}) {
                            if (! this.inputPoints.length) {
                                this.errorMessage = `{{ trans('rewards::app.checkout.total.invalid-points') }}`;

                                return;
                            }

                            if (! this.validPoints(this.inputPoints)) {
                                this.errorMessage = `{{ trans('rewards::app.checkout.total.only-number') }}`;

                                return;
                            }

                            let points = parseInt(self.inputPoints);

                            this.$axios.post(`{{ route('rewards.checkout.cart.points.apply') }}`, params)
                                .then((response) => {   
                                    if (this.isCartPage) {
                                        this.$parent.$parent.$refs.vCart.getCart();
                                    } else {
                                        this.$parent.getCart();
                                    }       
                                                        
                                    if (response.data.success) {
                                        this.cart = response.data.data;

                                        this.$emit('onApplyPoints');

                                        this.appliedPoints = this.inputPoints;

                                        this.inputPoints = '';

                                        this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });

                                        this.$refs.RewardModel.toggle();

                                        this.rewardApplied = true;

                                    } else {
                                        this.errorMessage = response.data.message;
                                    }

                                    self.disable_button = false;
                                }).catch(error => {
                                    self.errorMessage = error.response.data.message;

                                    self.disable_button = false;
                                });
                        },

                        removePoints() {
                            this.$axios.delete(`{{ route('rewards.checkout.points.remove.points') }}`, {
                                '_token': "{{ csrf_token() }}"
                            })

                            .then(response => {
                                if (this.isCartPage) {
                                    this.$parent.$parent.$refs.vCart.getCart();
                                } else {
                                    this.$parent.getCart();
                                }

                            this.rewardApplied = false;

                            this.$emitter.emit('add-flash', { type: 'success', message: response.data.message });
                            })
                            .catch(error => console.log(error));
                        },
                        
                        validPoints: function (inputPoints) {
                            var reg = new RegExp(/^\d*\.?\d*$/);

                            return reg.test(inputPoints);
                        }
                    }
                })
            </script>
        @endPushOnce
    @endif
@endif
