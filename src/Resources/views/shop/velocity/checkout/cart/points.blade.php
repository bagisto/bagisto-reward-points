@if ($cart)

@inject('rewardPointRepository', 'Webkul\Rewards\Repositories\RewardPointRepository')

@inject('rewardConfigRepository', 'Webkul\Rewards\Repositories\RewardConfigRepository')


@php
  
  $totalrewardpoints = 0;
  $maximum_reward_points = 0;

  if(auth()->guard('customer')->user()) {
      $totalrewardpoints = $rewardPointRepository->totalRewardPoints(auth()->guard('customer')->user()->id);
      $maximum_reward_points = $rewardConfigRepository->findByCode('used_at_one_time');
  }
    
@endphp

<script type="text/x-template" id="points-component-template" v-if="{{auth()->guard('customer')->user()->id}}">
        <div class="coupon-container">
            <div class="discount-control">
                <form class="custom-form" method="post" @submit.prevent="applyPoints">
                    <div class="control-group" :class="[error_message ? 'has-error' : '']">
                        <input
                            type="text"
                            name="points"
                            class="control"
                            v-model="points"
                            placeholder="{{ __('rewards::app.checkout.onepage.enter-points') }}" />

                        <div class="control-error">@{{ error_message }}</div>
                    </div>

                    <button class="theme-btn light" :disabled="disable_button">{{ __('rewards::app.checkout.onepage.apply-points') }}</button>
                    <p class="text-info"> <b> Your Total Point {{$totalrewardpoints}} </b> </p>
                </form>
            </div>

            <div class="applied-coupon-details" v-if="applied_points">
                <label>{{ __('rewards::app.checkout.total.points-applied') }}</label>

                <label class="right" style="display: inline-flex; align-items: center;">
                    <b>@{{ applied_points }}</b>

                    <i class="rango-close fs18" title="{{ __('rewards::app.checkout.total.remove-points') }}" v-on:click="removePoints"></i>
                </label>
            </div>
            
        </div>
    </script>

    <script>
        Vue.component('points-component', {
            template: '#points-component-template',

            inject: ['$validator'],

            data: function() {
                return {
                    points: '',
                    error_message: '',
                    applied_points: "{{ $cart->points }}",
                    route_name: "{{ request()->route()->getName() }}",
                    disable_button: ("{{ $cart->points }}" == "" ? false : true),
                }
            },

            methods: {
                applyPoints: function() {
                    if (! this.points) {
                        return;
                    }
        
                    let maximumRewardPointUsedAtOneTime = {{ $maximum_reward_points }};

                    console.log(maximumRewardPointUsedAtOneTime);
    

                    let totalRewardPoints = {{ $totalrewardpoints }}; 
                  
                    console.log(totalRewardPoints);

                    this.error_message = null;
                    this.disable_button = true;



                    if ( totalRewardPoints > maximumRewardPointUsedAtOneTime && totalRewardPoints < 0) {
                        this.error_message = 'You can use only ' + maximumRewardPointUsedAtOneTime + ' Points  at one time';
                        this.disable_button = false;
                        return;
                    } else if( this.points > totalRewardPoints ) {
                        this.error_message = 'You have only ' + totalRewardPoints + ' Points ';
                        this.disable_button = false;
                        return;
                    }

                    let points = this.points;
                    axios.post(
                        '{{ route('rewards.checkout.cart.points.apply') }}', {points}
                    ).then(response => {
                        if (response.data.success) {
                            this.$emit('onApplyPoints');
                            this.applied_points = this.points;
                            this.points = '';

                            window.flashMessages = [{'type': 'alert-success', 'message': response.data.message}];

                            this.$root.addFlashMessages();

                            this.redirectIfCartPage();
                        } else {
                            this.error_message = response.data.message;
                        }

                        this.disable_button = false;
                    }).catch(error => {
                        this.error_message = error.response.data.message;

                        this.disable_button = false;
                    });
                },

                removePoints: function () {
                    var self = this;

                    axios.delete('{{ route('rewards.checkout.points.remove.points') }}')
                    .then(function(response) {
                        self.$emit('onRemovePoints')
                        this.applied_points = '';

                        self.points = '';
                        self.disable_button = false;

                        window.flashMessages = [{'type': 'alert-success', 'message': response.data.message}];

                        self.$root.addFlashMessages();

                        self.redirectIfCartPage();
                    })
                    .catch(function(error) {
                        window.flashMessages = [{'type': 'alert-error', 'message': error.response.data.message}];

                        self.$root.addFlashMessages();
                    });
                },

                redirectIfCartPage: function() {
                    if (this.route_name != 'shop.checkout.cart.index')
                        return;

                    setTimeout(function() {
                        window.location.reload();
                    }, 700);
                }
            }
        });
    </script>
@endif