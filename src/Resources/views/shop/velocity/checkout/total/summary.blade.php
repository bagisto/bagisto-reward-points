@inject ('rewardPoints', 'Webkul\Rewards\Helpers\CartHelper')
@inject('rewardModule', 'Webkul\Rewards\Helpers\ModuleHelper')
@php

$reward_points = '';

$total_point_discounted = '';

$module_status = $rewardModule->checkModuleStatus();

if($cart){

$reward_points = $rewardPoints->getRewardsForCart($cart);

}

if($cart->points && $module_status) {

$total_point_discounted = $rewardPoints->redemption($cart->points);

}



@endphp
<div class="order-summary fs16">
    <h3 class="fw6">{{ __('velocity::app.checkout.cart.cart-summary') }}</h3>

    <div class="row">
        <span class="col-8">{{ __('velocity::app.checkout.sub-total') }}</span>
        <span class="col-4 text-right">{{ core()->currency($cart->base_sub_total) }}</span>
    </div>

    @if ($cart->selected_shipping_rate)
        <div class="row">
            <span class="col-8">{{ __('shop::app.checkout.total.delivery-charges') }}</span>
            <span class="col-4 text-right">{{ core()->currency($cart->selected_shipping_rate->base_price) }}</span>
        </div>
    @endif

    @if ($cart->base_tax_total)
        @foreach (Webkul\Tax\Helpers\Tax::getTaxRatesWithAmount($cart, true) as $taxRate => $baseTaxAmount)
            <div class="row">
                <span class="col-8"
                    id="taxrate-{{ core()->taxRateAsIdentifier($taxRate) }}">{{ __('shop::app.checkout.total.tax') }}
                    {{ $taxRate }} %</span>
                <span class="col-4 text-right"
                    id="basetaxamount-{{ core()->taxRateAsIdentifier($taxRate) }}">{{ core()->currency($baseTaxAmount) }}</span>
            </div>
        @endforeach
    @endif

    @if ($cart->base_discount_amount && $cart->base_discount_amount > 0)
        <div id="discount-detail" class="row">

            <span class="col-8">{{ __('shop::app.checkout.total.disc-amount') }}</span>
            <span class="col-4 text-right">
                -{{ core()->currency($cart->base_discount_amount) }}
            </span>
        </div>
    @endif



    @if ($reward_points > 0 && $module_status)
        <div id="discount-detail" class="row">

            <span class="col-8">Total Reward Points Awarded</span>
            <span class="col-4 text-right">
                {{ $reward_points }}
            </span>
        </div>
    @endif

    @if ($cart->points && $total_point_discounted)

        <div class="row">
            <span class="col-8"> {{ $cart->points }} points </span>
            <span class="col-4 text-right"> - {{ core()->currency($total_point_discounted) }}</span>
        </div>


    @endif


    <div class="payable-amount row" id="grand-total-detail">
        <span class="col-8">{{ __('shop::app.checkout.total.grand-total') }}</span>
        <span class="col-4 text-right fw6" id="grand-total-amount-detail">
            {{ core()->currency($cart->base_grand_total) }}
        </span>
    </div>

    <div class="row">
        <a href="{{ route('shop.checkout.onepage.index') }}"
            class="theme-btn text-uppercase col-12 remove-decoration fw6 text-center">
            {{ __('velocity::app.checkout.proceed') }}
        </a>
    </div>
</div>
