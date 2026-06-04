<?php

namespace Webkul\Rewards\Models;

use Webkul\Checkout\Models\Cart as BaseCart;

class Cart extends BaseCart
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'points',
    ];
}
