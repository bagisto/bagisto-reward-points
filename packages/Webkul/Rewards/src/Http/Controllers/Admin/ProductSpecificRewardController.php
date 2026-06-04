<?php

namespace Webkul\Rewards\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Event;
use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\Http\Requests\MassDestroyRequest;
use Webkul\Admin\Http\Requests\MassUpdateRequest;
use Webkul\Product\Repositories\ProductFlatRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Rewards\DataGrids\ProductRewardSpecificTimeDataGrid;
use Webkul\Rewards\Repositories\ProductRewardRepository;
use Webkul\Rewards\Repositories\ProductSpecificTimeRewardRepository;

class ProductSpecificRewardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected ProductRewardRepository $productRewardRepository,
        protected ProductSpecificTimeRewardRepository $productSpecificTimeRewardRepository,
        protected ProductRepository $productRepository,
        protected ProductFlatRepository $productFlatRepository
    ) {}

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function specificIndex()
    {
        if (request()->ajax()) {
            return app(ProductRewardSpecificTimeDataGrid::class)->toJson();
        }

        return view('rewards::admin.rewards.product.specific-time.index-product-specific');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function createSpecificProduct()
    {
        return view('rewards::admin.rewards.product.specific-time.add-product-specific-reward');
    }

    /**
     * search the products
     */
    public function searchProductsForSpecific()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');

        $rewardedProductIds = $this->productSpecificTimeRewardRepository->where('end_time', '>', $now)
            ->get()
            ->pluck('product_id');

        $searchQuery = request()->input('query');

        $products = $this->productFlatRepository->scopeQuery(function ($query) use ($rewardedProductIds, $searchQuery) {
            $channel = request()->get('channel') ?: (core()->getCurrentChannelCode() ?: core()->getDefaultChannelCode());

            $locale = request()->get('locale') ?: app()->getLocale();

            return $query->distinct()
                ->leftJoin('products', 'product_flat.product_id', '=', 'products.id')
                ->addSelect('product_flat.*')
                ->where('product_flat.status', 1)
                ->where('product_flat.channel', $channel)
                ->where('product_flat.locale', $locale)
                ->where('products.parent_id', null)
                ->where('product_flat.name', 'LIKE', '%'.$searchQuery.'%')
                ->whereNotIn('product_flat.product_id', $rewardedProductIds)
                ->inRandomOrder();
        })->get();

        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function productSpecificTimeRewardStore()
    {
        request()->validate([
            'start_time' => 'required|date|after:yesterday',
            'end_time' => 'required|date|after:start_time',
            'product_id' => 'required',
        ], [
            'product_id.required' => 'The product field is required.',
        ]);

        if (empty(request()->product_id)) {
            session()->flash('error', trans('rewards::app.admin.rewards.products.index.error-product'));

            return redirect()->back();
        }

        $this->productSpecificTimeRewardRepository->create(request()->only([
            'reward_points',
            'product_id',
            'start_time',
            'end_time',
            'status',
        ]));

        session()->flash('success', trans('rewards::app.admin.rewards.products.index.create-success'));

        return redirect()->route('admin.reward.product.product-specific-time');
    }

    /**
     * search the products for updates
     */
    public function searchProductsForSpecificUpdate($id)
    {
        $productReward = $this->productSpecificTimeRewardRepository->find($id);

        $now = Carbon::now()->format('Y-m-d H:i:s');

        $rewardedProductIds = $this->productSpecificTimeRewardRepository->where('end_time', '>', $now)
            ->get()
            ->pluck('product_id')
            ->filter(function ($productId) use ($productReward) {
                return $productId !== $productReward->product_id;
            });

        $searchQuery = request()->input('query');

        $products = $this->productFlatRepository->scopeQuery(function ($query) use ($rewardedProductIds, $searchQuery) {
            $channel = request()->get('channel') ?: (core()->getCurrentChannelCode() ?: core()->getDefaultChannelCode());

            $locale = request()->get('locale') ?: app()->getLocale();

            return $query->distinct()
                ->leftJoin('products', 'product_flat.product_id', '=', 'products.id')
                ->addSelect('product_flat.*')
                ->where('product_flat.status', 1)
                ->where('product_flat.channel', $channel)
                ->where('product_flat.locale', $locale)
                ->where('products.parent_id', null)
                ->where('product_flat.name', 'LIKE', '%'.$searchQuery.'%')
                ->whereNotIn('product_flat.product_id', $rewardedProductIds)
                ->inRandomOrder();
        })->get();

        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
     * @return View
     */
    public function editProductSpecificReward($id)
    {
        $productReward = $this->productSpecificTimeRewardRepository->find($id);

        if ($productReward) {
            return view('rewards::admin.rewards.product.specific-time.edit-product-specific-reward', compact('productReward'));
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function productSpecificTimeRewardUpdate($id)
    {
        request()->validate([
            'start_time' => 'required|date|after:yesterday',
            'end_time' => 'required|date|after:start_time',
            'product_id' => 'required',
        ], [
            'product_id.required' => 'The product field is required.',
        ]);

        if (empty(request()->product_id)) {
            session()->flash('error', trans('rewards::app.admin.rewards.products.index.error-product'));

            return redirect()->back();
        }

        $this->productSpecificTimeRewardRepository->update(request()->only([
            'reward_points',
            'product_id',
            'start_time',
            'end_time',
            'status',
        ]), $id);

        session()->flash('success', trans('rewards::app.admin.rewards.products.index.update-success'));

        return redirect()->route('admin.reward.product.product-specific-time');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroySpecific($id)
    {
        $this->productSpecificTimeRewardRepository->findOrFail($id);

        try {
            Event::dispatch('reward.product.specific.delete.before', $id);

            $this->productSpecificTimeRewardRepository->delete($id);

            Event::dispatch('reward.product.specific.delete.after', $id);

            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.products.index.delete-success')]);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.products.index.delete-failed')], 500);
        }
    }

    /**
     * Mass delete the product rewards for specific time.
     */
    public function massDestroySpecific(MassDestroyRequest $massDestroyRequest): JsonResponse
    {
        $productSpecificRewardIds = $massDestroyRequest->input('indices');

        try {
            Event::dispatch('reward.product.specific.delete.before', $productSpecificRewardIds);

            $this->productSpecificTimeRewardRepository->whereIn('id', $productSpecificRewardIds)->delete();

            Event::dispatch('reward.product.specific.delete.after', $productSpecificRewardIds);

            return new JsonResponse([
                'message' => trans('rewards::app.admin.rewards.products.index.datagrid.mass-delete-success'),
            ], 200);
        } catch (\Exception $e) {
            return new JsonResponse([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Mass update the product rewards for specific time.
     */
    public function massUpdateSpecific(MassUpdateRequest $massUpdateRequest): JsonResponse
    {
        $productSpecificRewardIds = $massUpdateRequest->input('indices');

        foreach ($productSpecificRewardIds as $productSpecificRewardId) {
            Event::dispatch('reward.product.specific.update.before', $productSpecificRewardId);

            $productSpecificRewardId = $this->productSpecificTimeRewardRepository->update([
                'status' => $massUpdateRequest->input('value'),
            ], $productSpecificRewardId);

            Event::dispatch('reward.product.specific.update.after', $productSpecificRewardId);
        }

        return new JsonResponse([
            'message' => trans('rewards::app.admin.rewards.products.index.datagrid.mass-update-success'),
        ], 200);
    }
}
