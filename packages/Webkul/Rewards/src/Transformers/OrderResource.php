<?php

namespace Webkul\Rewards\Transformers;

use Illuminate\Http\Request;
use Webkul\Rewards\Helpers\CartHelper;
use Webkul\Sales\Transformers\OrderResource as BaseOrderResource;

class OrderResource extends BaseOrderResource
{
    public function __construct($resource, protected ?CartHelper $rewardCartHelper = null)
    {
        parent::__construct($resource);
    }

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = parent::toArray($request);

        $data['points'] = $this->points ?? 0;
        $data['points_amount'] = $this->rewardCartHelper?->redemption($data['points']);

        return $data;
    }
}
