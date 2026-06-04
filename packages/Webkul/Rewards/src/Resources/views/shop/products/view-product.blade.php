@inject ('productReward', 'Webkul\Rewards\Helpers\ProductRewardHelper')
@inject ('cartHelper', 'Webkul\Rewards\Helpers\CartHelper')

@php
    $reward = 0;

    $endDate = "";

    $check = true;

    if (core()->getConfigData('reward.general.general.module-status')) {
        $rewardData = $productReward->getProductRewardPoints($product->id);

        if (auth()->guard('customer')->user()) {
            $data = [
                'product_id'  => $product->product_id,
                'customer_id' => auth()->guard('customer')->user()->id,
            ];

            if ($cartHelper->checkData($data, 'product')) {
                $check = false;
            }
        }

        if (
            $rewardData
            && $check
        ) {
            $reward = $rewardData->reward_points;

            if ($rewardData->end_time) {
                $endDate = \Carbon\Carbon::parse($rewardData->end_time)->format('d-M-Y H:i');
            }
        }
    }
@endphp

@if (core()->getConfigData('reward.general.general.module-status'))
    @if (
        $endDate
        && $reward
    )
        <p class="mb-5 text-gray-800 dark:text-white">
            @lang('rewards::app.shop.product.product-reward-end-date', ['reward' => $reward , 'end_date' => $endDate ])
        </p>
    @elseif ($reward > 0)
        <p class="mb-5 text-gray-800 dark:text-white">
            @lang('rewards::app.shop.product.product-reward', ['reward' => $reward ])
        </p>
    @endif
@endif
