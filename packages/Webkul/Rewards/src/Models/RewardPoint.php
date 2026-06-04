<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Rewards\Contracts\RewardPoint as RewardPointContract;

class RewardPoint extends Model implements RewardPointContract
{
    /**
     * Table associated with the model.
     *
     * @var string
     */
    protected $tables = 'reward_points';

    /**
     * reward status for processing
     */
    public const STATUS_PROCESSING = 'processing';

    /**
     * reward status for approved
     */
    public const STATUS_APPROVED = 'approved';

    /**
     * reward status for canceled
     */
    public const STATUS_CANCELED = 'canceled';

    /**
     * reward status for closed
     */
    public const STATUS_CLOSED = 'closed';

    /**
     * reward status for pending
     */
    public const STATUS_PENDING = 'pending';

    /**
     * reward status for fraud
     */
    public const STATUS_FRAUD = 'fraud';

    /**
     * reward status for expire
     */
    public const STATUS_EXPIRE = 'expire';

    /**
     * reward status for used
     */
    public const STATUS_USED = 'used';

    /**
     * reward status for disapproved
     */
    public const STATUS_DISAPPROVED = 'disapproved';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'customer_id',
        'category_id',
        'attribute_id',
        'product_id',
        'reward_points',
        'note',
        'status',
        'exp_date',
        'product_purchased',
        'product_reviewed',
        'customer_registed',
        'customer_dob',
        'product_category',
        'product_attribute',
        'order_cart',
    ];

    protected $statusLabel = [
        self::STATUS_PROCESSING => 'processing',
        self::STATUS_APPROVED => 'approved',
        self::STATUS_CANCELED => 'canceled',
        self::STATUS_CLOSED => 'closed',
        self::STATUS_PENDING => 'pending',
        self::STATUS_FRAUD => 'fraud',
        self::STATUS_EXPIRE => 'expire',
        self::STATUS_USED => 'used',
    ];
}
