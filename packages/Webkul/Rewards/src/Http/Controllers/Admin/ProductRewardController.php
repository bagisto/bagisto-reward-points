<?php

namespace Webkul\Rewards\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;
use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\Http\Requests\MassDestroyRequest;
use Webkul\Admin\Http\Requests\MassUpdateRequest;
use Webkul\Product\Repositories\ProductFlatRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Rewards\DataGrids\ProductRewardDataGrid;
use Webkul\Rewards\Repositories\ProductRewardRepository;
use Webkul\Rewards\Repositories\ProductSpecificTimeRewardRepository;

class ProductRewardController extends Controller
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
    public function index()
    {
        if (request()->ajax()) {
            return app(ProductRewardDataGrid::class)->toJson();
        }

        return view('rewards::admin.rewards.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('rewards::admin.rewards.product.add-product-reward');
    }

    /**
     * search the products
     */
    public function searchProducts()
    {
        $rewardedProductIds = $this->productRewardRepository->get()->pluck('product_id');

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
    public function productRewardStore()
    {
        $this->validate(request(), [
            'reward_points' => 'required|integer',
            'product_id' => 'required',
            'status' => 'required',
        ], [
            'product_id.required' => 'The product field is required.',
        ]);

        if (empty(request()->product_id)) {
            session()->flash('error', trans('rewards::app.admin.rewards.products.index.error-product'));

            return redirect()->back();
        }

        $this->productRewardRepository->create(request()->only([
            'reward_points',
            'product_id',
            'status',
        ]));

        session()->flash('success', trans('rewards::app.admin.rewards.products.index.create-success'));

        return redirect()->route('admin.reward.product.index');
    }

    /**
     * search the products for updates
     */
    public function searchProductsForUpdate($id)
    {
        $productReward = $this->productRewardRepository->find($id);

        $rewardedProductIds = $this->productRewardRepository->get()
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
    public function editProductReward($id)
    {
        $productReward = $this->productRewardRepository->find($id);

        if ($productReward) {
            return view('rewards::admin.rewards.product.edit-product-reward', compact('productReward'));
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function productRewardUpdate($id)
    {
        $this->validate(request(), [
            'reward_points' => 'required|integer',
            'product_id' => 'required',
            'status' => 'required',
        ], [
            'product_id.required' => 'The product field is required.',
        ]);

        if (empty(request()->product_id)) {
            session()->flash('error', trans('rewards::app.admin.rewards.products.index.error-product'));

            return redirect()->back();
        }

        $this->productRewardRepository->update(request()->only([
            'reward_points',
            'product_id',
            'status',
        ]), $id);

        session()->flash('success', trans('rewards::app.admin.rewards.products.index.update-success'));

        return redirect()->route('admin.reward.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id): JsonResponse
    {
        $this->productRewardRepository->findOrFail($id);

        try {
            Event::dispatch('reward.product.delete.before', $id);

            $this->productRewardRepository->delete($id);

            Event::dispatch('reward.product.delete.after', $id);

            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.products.index.delete-success')]);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => trans('rewards::app.admin.rewards.products.index.delete-failed')], 500);
        }
    }

    /**
     * Mass delete the product rewards.
     */
    public function massDestroy(MassDestroyRequest $massDestroyRequest): JsonResponse
    {
        $productRewardIds = $massDestroyRequest->input('indices');

        try {
            Event::dispatch('reward.product.delete.before', $productRewardIds);

            $this->productRewardRepository->whereIn('id', $productRewardIds)->delete();

            Event::dispatch('reward.product.delete.after', $productRewardIds);

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
     * Mass approve the product rewards.
     */
    public function massUpdate(MassUpdateRequest $massUpdateRequest): JsonResponse
    {
        $productRewardIds = $massUpdateRequest->input('indices');

        foreach ($productRewardIds as $productRewardId) {
            Event::dispatch('reward.product.update.before', $productRewardId);

            $productRewardId = $this->productRewardRepository->update([
                'status' => $massUpdateRequest->input('value'),
            ], $productRewardId);

            Event::dispatch('reward.product.update.after', $productRewardId);
        }

        return new JsonResponse([
            'message' => trans('rewards::app.admin.rewards.products.index.datagrid.mass-update-success'),
        ], 200);
    }
}
