<?php

namespace Webkul\Rewards\Http\Controllers\Shop;

use Illuminate\Support\Facades\Event;
use Webkul\Shop\Http\Controllers\Controller;
use Webkul\Checkout\Facades\Cart;
use Webkul\Shipping\Facades\Shipping;
use Webkul\Payment\Facades\Payment;
use Webkul\Checkout\Http\Requests\CustomerAddressForm;
use Webkul\Sales\Repositories\OrderRepository;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Rewards\Repositories\RewardPointRepository;
use Webkul\Rewards\Helpers\ModuleHelper;
use Webkul\Shop\Http\Controllers\OnepageController as baseController;

class OnepageController extends baseController
{
    /**
     * OrderRepository object
     *
     * @var \Webkul\Sales\Repositories\OrderRepository
     */
    protected $orderRepository;

    /**
     * RewardConfigRepository object
     *
     * @var Webkul\Rewards\Helpers\ModuleHelper
     */
    protected $rewardModuleHelper;

      /**
     * OrderRepository object
     *
     * @var \Webkul\Sales\Repositories\RewardPointRepository
     */
    protected $rewardPointRepository;


     /**
     * customerRepository instance object
     *
     * @var \Webkul\Customer\Repositories\CustomerRepository
     */
    protected $customerRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Attribute\Repositories\OrderRepository  $orderRepository
     * @param  \Webkul\Customer\Repositories\CustomerRepository  $customerRepository
     * @param  Webkul\Rewards\Helpers\ModuleHelper  $moduleHelper
     * @return void
     */
    public function __construct(
        OrderRepository $orderRepository,
        CustomerRepository $customerRepository,
        RewardPointRepository $rewardPointRepository,
        ModuleHelper $rewardModuleHelper
    )
    {
        $this->orderRepository = $orderRepository;

        $this->customerRepository = $customerRepository;
        $this->rewardPointRepository = $rewardPointRepository;
        $this->rewardModuleHelper  = $rewardModuleHelper;
    }  

    /**
     * Saves order.
     *
     * @return \Illuminate\Http\Response
    */
    public function saveOrder()
    {

        if (Cart::hasError()) {
            return response()->json(['redirect_url' => route('shop.checkout.cart.index')], 403);
        }

        Cart::collectTotals();

        $this->validateOrder();

        $cart = Cart::getCart();

        if ($redirectUrl = Payment::getRedirectUrl($cart)) {
            return response()->json([
                'success'      => true,
                'redirect_url' => $redirectUrl,
            ]);
        }

        $order = $this->orderRepository->create(Cart::prepareDataForOrder());
       

        if ($this->rewardModuleHelper->checkModuleStatus()) {

            $orderReward = $this->rewardPointRepository->create($order);
        }

        Cart::deActivateCart();

        session()->flash('order', $order);

        return response()->json([
            'success' => true,
        ]);
    }
}