<?php

namespace Webkul\Rewards\Http\Controllers\Shop;

use Illuminate\Http\Resources\Json\JsonResource;
use Webkul\Checkout\Facades\Cart;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Payment\Facades\Payment;
use Webkul\Rewards\Helpers\CartHelper;
use Webkul\Rewards\Repositories\RewardPointRepository;
use Webkul\Rewards\Transformers\OrderResource;
use Webkul\Sales\Repositories\OrderRepository;
use Webkul\Shop\Http\Controllers\API\OnepageController as BaseOnePageController;

class OnepageController extends BaseOnePageController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected OrderRepository $orderRepository,
        protected CustomerRepository $customerRepository,
        protected RewardPointRepository $rewardPointRepository,
        protected CartHelper $rewardCartHelper
    ) {
        parent::__construct($orderRepository, $customerRepository);
    }

    /**
     * Store order
     */
    public function storeOrder()
    {
        if (Cart::hasError()) {
            return new JsonResource([
                'redirect' => true,
                'redirect_url' => route('shop.checkout.cart.index'),
            ]);
        }

        Cart::collectTotals();

        try {
            $this->validateOrder();
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }

        $cart = Cart::getCart();

        if ($redirectUrl = Payment::getRedirectUrl($cart)) {
            return new JsonResource([
                'redirect' => true,
                'redirect_url' => $redirectUrl,
            ]);
        }

        $data = (new OrderResource($cart, $this->rewardCartHelper))->jsonSerialize();

        $order = $this->orderRepository->create($data);

        if (core()->getConfigData('reward.general.general.module-status')) {
            $this->rewardPointRepository->create($order);
        }

        Cart::deActivateCart();

        session()->flash('order_id', $order->id);

        return new JsonResource([
            'redirect' => true,
            'redirect_url' => route('shop.checkout.onepage.success'),
        ]);
    }
}
