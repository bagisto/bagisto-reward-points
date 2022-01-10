<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;

use Webkul\Rewards\Contracts\RewardPoint as RewardPointContract;

class RewardPoint extends Model implements RewardPointContract
{
    protected $fillable = [
        "order_id",
        "customer_id",
        "category_id",
        "attribute_id",
        "product_id",
        "reward_points",
        "note",
        "status",
        "exp_date",   
        'product_purchased',
        'product_reviewed',
        'customer_registed',
        'customer_dob',
        'product_category',
        'product_attribute',
        'order_cart'   
    ];

    protected $tables = "reward_points";
}