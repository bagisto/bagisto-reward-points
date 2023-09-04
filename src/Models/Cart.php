<?php

namespace Webkul\Rewards\Models;


use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Webkul\Checkout\Models\CartItemProxy;
use Webkul\Checkout\Models\CartAddressProxy;
use Webkul\Checkout\Models\CartAddress;
use Webkul\Checkout\Models\CartShippingRateProxy;
use Webkul\Checkout\Models\CartPaymentProxy;

use Webkul\Checkout\Models\Cart as baseCart;

class Cart extends baseCart
{
    protected $table = 'cart';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'points'
    ];

    protected $with = [
        'items',
        'items.children',
    ];

    /**
     * To get relevant associated items with the cart instance
     */
    public function items(): HasMany {
        return $this->hasMany(CartItemProxy::modelClass())->whereNull('parent_id');
    }

    /**
     * To get all the associated items with the cart instance even the parent and child items of configurable products
     */
    public function all_items(): HasMany {
        return $this->hasMany(CartItemProxy::modelClass());
    }

    /**
     * Get the addresses for the cart.
     */
    public function addresses(): HasMany
    {
        return $this->hasMany(CartAddressProxy::modelClass());
    }

    /**
     * Get the biling address for the cart.
     */
    public function billing_address(): HasMany
    {
        return $this->addresses()->where('address_type', CartAddress::ADDRESS_TYPE_BILLING);
    }

    /**
     * Get billing address for the cart.
     */
    public function getBillingAddressAttribute(): HasMany
    {
        return $this->billing_address()->first();
    }

    /**
     * Get the shipping address for the cart.
     */
    public function shipping_address(): HasMany
    {
        return $this->addresses()->where('address_type', CartAddress::ADDRESS_TYPE_SHIPPING);
    }

    /**
     * Get shipping address for the cart.
     */
    public function getShippingAddressAttribute(): ?Model
    {
        return $this->shipping_address()->first();
    }

    /**
     * Get the shipping rates for the cart.
     */
    public function shipping_rates(): HasManyThrough
    {
        return $this->hasManyThrough(CartShippingRateProxy::modelClass(), CartAddressProxy::modelClass(), 'cart_id', 'cart_address_id');
    }

    /**
     * Get all of the attributes for the attribute groups.
     */
    public function selected_shipping_rate(): HasManyThrough
    {
        return $this->shipping_rates()->where('method', $this->shipping_method);
    }

    /**
     * Get all of the attributes for the attribute groups.
     */
    public function getSelectedShippingRateAttribute(): HasManyThrough
    {
        return $this->selected_shipping_rate()->where('method', $this->shipping_method)->first();
    }

    /**
     * Get the payment associated with the cart.
     */
    public function payment(): HasOne
    {
        return $this->hasOne(CartPaymentProxy::modelClass());
    }

    /**
     * Checks if cart have stockable items
     *
     * @return boolean
     */
    public function haveStockableItems(): bool
    {
        foreach ($this->items as $item) {
            if ($item->product->isStockable()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks if cart has downloadable items
     *
     * @return boolean
     */
    public function hasDownloadableItems(): bool
    {
        foreach ($this->items as $item) {
            if (stristr($item->type,'downloadable') !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Returns true if cart contains one or many products with quantity box.
     * (for example: simple, configurable, virtual)
     * @return bool
     */
    public function hasProductsWithQuantityBox(): bool
    {
        foreach ($this->items as $item) {
            if ($item->product->getTypeInstance()->showQuantityBox() === true) {
                return true;
            }
        }
        return false;
    }

    /**
     * Checks if cart has items that allow guest checkout
     *
     * @return boolean
     */
    public function hasGuestCheckoutItems(): bool
    {
        foreach ($this->items as $item) {
            if ($item->product->getAttribute('guest_checkout') === 0) {
                return false;
            }
        }

        return true;
    }

    /**
     * Check minimum order.
     *
     * @return boolean
     */
    public function checkMinimumOrder(): bool
    {
        $minimumOrderAmount = (float) core()->getConfigData('sales.orderSettings.minimum-order.minimum_order_amount') ?? 0;

        $cartBaseSubTotal = (float) $this->base_sub_total;

        return $cartBaseSubTotal >= $minimumOrderAmount;
    }
}
