<?php

namespace Webkul\Rewards;

use Illuminate\Support\Facades\Event;
use Webkul\Checkout\Cart as BaseCart;
use Webkul\Checkout\Repositories\CartAddressRepository;
use Webkul\Checkout\Repositories\CartItemRepository;
use Webkul\Checkout\Repositories\CartRepository;
use Webkul\Customer\Repositories\CustomerAddressRepository;
use Webkul\Customer\Repositories\WishlistRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Rewards\Helpers\CartHelper as RewardCartHelper;
use Webkul\Tax\Repositories\TaxCategoryRepository;

class Cart extends BaseCart
{
    /**
     * Create a new class instance.
     *
     * @return void
     */
    public function __construct(
        CartRepository $cartRepository,
        CartItemRepository $cartItemRepository,
        CartAddressRepository $cartAddressRepository,
        ProductRepository $productRepository,
        TaxCategoryRepository $taxCategoryRepository,
        WishlistRepository $wishlistRepository,
        CustomerAddressRepository $customerAddressRepository,
        protected RewardCartHelper $rewardCartHelper,
    ) {
        parent::__construct(
            $cartRepository,
            $cartItemRepository,
            $cartAddressRepository,
            $productRepository,
            $taxCategoryRepository,
            $wishlistRepository,
            $customerAddressRepository
        );
    }

    public function collectTotals(): self
    {
        if (! $this->validateItems()) {
            /**
             * Reset the cart so that fresh copy of cart can be created.
             */
            $this->refreshCart();
        }

        $cart = $this->getCart();

        if (! $cart) {
            return $this;
        }

        Event::dispatch('checkout.cart.collect.totals.before', $cart);

        $this->calculateItemsTax();

        $this->calculateShippingTax();

        $this->refreshCart();

        // Get Reward Points
        $redemption = core()->getConfigData('reward.general.general.module-status') && ! empty($cart->points)
            ? $this->rewardCartHelper->redemption($cart->points)
            : null;

        $cart->sub_total = $cart->base_sub_total = 0;
        $cart->sub_total_incl_tax = $cart->base_sub_total_incl_tax = 0;

        $cart->grand_total = $cart->base_grand_total = 0;
        $cart->tax_total = $cart->base_tax_total = 0;

        $cart->discount_amount = $cart->base_discount_amount = 0;

        $cart->shipping_amount = $cart->base_shipping_amount = 0;
        $cart->shipping_amount_incl_tax = $cart->base_shipping_amount_incl_tax = 0;

        $quantities = 0;

        foreach ($cart->items as $item) {
            $cart->discount_amount += $item->discount_amount;
            $cart->base_discount_amount += $item->base_discount_amount;

            $cart->tax_total += $item->tax_amount;
            $cart->base_tax_total += $item->base_tax_amount;

            $cart->sub_total = (float) $cart->sub_total + $item->total;
            $cart->base_sub_total = (float) $cart->base_sub_total + $item->base_total;

            $cart->sub_total_incl_tax = (float) $cart->sub_total_incl_tax + $item->total_incl_tax;
            $cart->base_sub_total_incl_tax = (float) $cart->base_sub_total_incl_tax + $item->base_total_incl_tax;

            $quantities += $item->quantity;
        }

        $cart->items_qty = $quantities;

        $cart->items_count = $cart->items->count();

        $cart->grand_total = $cart->sub_total + $cart->tax_total - $cart->discount_amount;
        $cart->base_grand_total = $cart->base_sub_total + $cart->base_tax_total - $cart->base_discount_amount;

        // Reduce reward points amount from total of the cart
        if (
            core()->getConfigData('reward.general.general.module-status')
            && $redemption
            && $cart->base_grand_total
        ) {
            $cart->grand_total = $cart->grand_total - $redemption;

            $cart->base_grand_total = $cart->base_grand_total - $redemption;
        }

        if ($shipping = $cart->selected_shipping_rate) {
            $cart->tax_total += $shipping->tax_amount;
            $cart->base_tax_total += $shipping->base_tax_amount;

            $cart->shipping_amount = $shipping->price;
            $cart->base_shipping_amount = $shipping->base_price;

            $cart->shipping_amount_incl_tax = $shipping->price_incl_tax;
            $cart->base_shipping_amount_incl_tax = $shipping->base_price_incl_tax;

            $cart->grand_total = (float) $cart->grand_total + $shipping->tax_amount + $shipping->price - $shipping->discount_amount;
            $cart->base_grand_total = (float) $cart->base_grand_total + $shipping->base_tax_amount + $shipping->base_price - $shipping->base_discount_amount;

            $cart->discount_amount += $shipping->discount_amount;
            $cart->base_discount_amount += $shipping->base_discount_amount;
        }

        $cart->discount_amount = round($cart->discount_amount, 2);
        $cart->base_discount_amount = round($cart->base_discount_amount, 2);

        $cart->sub_total = round($cart->sub_total, 2);
        $cart->base_sub_total = round($cart->base_sub_total, 2);

        $cart->sub_total_incl_tax = round($cart->sub_total_incl_tax, 2);
        $cart->base_sub_total_incl_tax = round($cart->base_sub_total_incl_tax, 2);

        $cart->grand_total = round($cart->grand_total, 2);

        $cart->base_grand_total = round($cart->base_grand_total, 2);

        $cart->cart_currency_code = core()->getCurrentCurrencyCode();

        $cart->save();

        Event::dispatch('checkout.cart.collect.totals.after', $cart);

        $this->setCart($cart);

        return $this;
    }

    /**
     * Set points to the cart
     *
     * @param  string  $points
     * @return \Webkul\Checkout\Contracts\Cart
     */
    public function setPoints($points)
    {
        $cart = $this->getCart();

        $cart->points = $points;

        $cart->save();

        return $this;
    }

    /**
     * Remove points from cart
     *
     * @return \Webkul\Checkout\Contracts\Cart
     */
    public function removePoints()
    {
        $cart = $this->getCart();

        $cart->points = null;

        $cart->save();

        return $this;
    }
}
