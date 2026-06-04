<?php

namespace Webkul\Rewards\Http\Controllers\Shop;

use Illuminate\Http\Resources\Json\JsonResource;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Product\Repositories\ProductReviewAttachmentRepository;
use Webkul\Product\Repositories\ProductReviewRepository;
use Webkul\Rewards\Repositories\RewardPointRepository;
use Webkul\Shop\Http\Controllers\API\ReviewController as BaseReviewController;

class ReviewController extends BaseReviewController
{
    /**
     * Create a controller instance.
     *
     * @return void
     */
    public function __construct(
        protected ProductRepository $productRepository,
        protected ProductReviewAttachmentRepository $productReviewAttachmentRepository,
        protected ProductReviewRepository $productReviewRepository,
        protected RewardPointRepository $rewardPointRepository,
    ) {
        parent::__construct($productRepository, $productReviewRepository, $productReviewAttachmentRepository);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(int $id): JsonResource
    {
        $this->validate(request(), [
            'title' => 'required',
            'comment' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
            'attachments' => 'array',
            'attachments.*' => 'file|mimetypes:image/*,video/*',
        ]);

        $data = array_merge(request()->only([
            'title',
            'comment',
            'rating',
        ]), [
            'attachments' => request()->file('attachments') ?? [],
            'status' => self::STATUS_PENDING,
            'product_id' => $id,
        ]);

        $data['name'] = auth()->guard('customer')->user()?->name ?? request()->input('name');
        $data['customer_id'] = auth()->guard('customer')->id() ?? null;

        $review = $this->productReviewRepository->create($data);

        $this->productReviewAttachmentRepository->upload($data['attachments'], $review);

        $this->rewardPointRepository->addReviewReward($data);

        return new JsonResource([
            'message' => trans('shop::app.products.view.reviews.success'),
        ]);
    }
}
