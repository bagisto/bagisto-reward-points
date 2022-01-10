<?php

namespace Webkul\Rewards\Http\Controllers\Shop;

use Webkul\Product\Repositories\ProductRepository;
use Webkul\Product\Repositories\ProductReviewRepository;
use Webkul\Rewards\Repositories\RewardPointRepository;
use Webkul\Shop\Http\Controllers\Controller;

class ReviewController extends Controller
{
    /**
     * ProductRepository object
     *
     * @var \Webkul\Product\Repositories\ProductRepository
     */
    protected $productRepository;
  
    /**
     * ProductRepository object
     *
     * @var \Webkul\Rewards\Repositories\RewardPointRepository
     */
    protected $rewardPointRepository;

    /**
     * ProductReviewRepository object
     *
     * @var \Webkul\Product\Repositories\ProductReviewRepository
     */
    protected $productReviewRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Product\Repositories\ProductRepository  $productRepository
     * @param  \Webkul\Product\Repositories\ProductReviewRepository  $productReviewRepository
     * @param  \Webkul\Rewards\Repositories\RewardPointRepository $rewardPointRepository
     * @return void
     */
    public function __construct(
        ProductRepository $productRepository,
        ProductReviewRepository $productReviewRepository,
        RewardPointRepository $rewardPointRepository
    ) {
        $this->productRepository = $productRepository;

        $this->productReviewRepository = $productReviewRepository;

        $this->rewardPointRepository = $rewardPointRepository;

        parent::__construct();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $this->validate(request(), [
            'comment' => 'required',
            'rating'  => 'required|numeric|min:1|max:5',
            'title'   => 'required',
        ]);

        $data = request()->all();

        if (auth()->guard('customer')->user()) {
            $data['customer_id'] = auth()->guard('customer')->user()->id;
            $data['name'] = auth()->guard('customer')->user()->first_name . ' ' . auth()->guard('customer')->user()->last_name;
        }

        $data['status'] = 'pending';
        $data['product_id'] = $id;

        $this->productReviewRepository->create($data);

        $this->rewardPointRepository->addReviewReward($data);

        session()->flash('success', trans('shop::app.response.submit-success', ['name' => 'Product Review']));

        return redirect()->route($this->_config['redirect']);
    }
}