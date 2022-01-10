<?php

namespace Webkul\Rewards\Helpers;

use Webkul\Rewards\Models\ProductReward;
use Webkul\Rewards\Models\ProductSpecificTimeReward;
use Carbon\Carbon;

class ProductRewardHelper
{

    /**
     * @param use Webkul\Rewards\Models\ProductReward  $product_id
     * @param use Webkul\Rewards\Models\ProductSpecificTimeReward $product_id
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getProductRewardPoints($product_id)
    {
    
        if(ProductSpecificTimeReward::where('product_id',$product_id)->where('status','1')->first()){
            $productrewards = ProductSpecificTimeReward::where('product_id',$product_id)->where('status','1')->first();

            if (Carbon::parse($productrewards->end_time)->gte(Carbon::now())) {
                return $productrewards;
            }
           
        }else{
            return ProductReward::where('product_id',$product_id)->where('status','1')->first();
        }

    }


}

