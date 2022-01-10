<?php

namespace Webkul\Rewards\Http\Controllers;


use Webkul\Product\Http\Controllers\Controller;
use Webkul\Rewards\Repositories\ProductRewardRepository;
use Webkul\Rewards\Repositories\ProductSpecificTimeRewardRepository;
use Webkul\Product\Repositories\ProductRepository;

class ProductRewardController extends Controller
{
    /**
     * ProductRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\ProductRepository
     */

    protected $productRepository;

    /**
     * ProductRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\ProductRewardRepository
     */

    protected $productRewardRepository;


    /**
     * ProductSpecificTimeRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\ProductSpecificTimeRewardRepository
     */

    protected $productSpecificTimeRewardRepository;

    /**
     * Create a new controller instance.
     *
     * @param  Webkul\Rewards\Repositories\ProductRewardRepository  $productRewardRepository
     * @param  Webkul\Rewards\Repositories\ProductSpecificTimeRewardRepository  $productSpecificTimeRewardRepository
     * @param  Webkul\Rewards\Repositories\ProductRepository  $productRepository
     * @return void
     */


    public function __construct(
        ProductRewardRepository $productRewardRepository,
        ProductSpecificTimeRewardRepository $productSpecificTimeRewardRepository,
        ProductRepository $productRepository
    ) {
        $this->productRewardRepository = $productRewardRepository;
        $this->productSpecificTimeRewardRepository = $productSpecificTimeRewardRepository;
        $this->productRepository = $productRepository;
        $this->_config = request('_config');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view($this->_config['view']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $products = app(\Webkul\Product\Repositories\ProductFlatRepository::class)->scopeQuery(function ($query) {
            $channel = request()->get('channel') ?: (core()->getCurrentChannelCode() ?: core()->getDefaultChannelCode());

            $locale = request()->get('locale') ?: app()->getLocale();

            return $query->distinct()
                ->leftJoin('products', 'product_flat.product_id', '=', 'products.id')
                ->addSelect('product_flat.*')
                ->where('product_flat.status', 1)
                ->where('product_flat.channel', $channel)
                ->where('product_flat.locale', $locale)
                ->where('products.parent_id',NULL)
                ->inRandomOrder();

        })->get();

        return view($this->_config['view'], compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function editProductReward($id)
    {
        $productreward = $this->productRewardRepository->edit($id);

        $products = app(\Webkul\Product\Repositories\ProductFlatRepository::class)->scopeQuery(function ($query) {
            $channel = request()->get('channel') ?: (core()->getCurrentChannelCode() ?: core()->getDefaultChannelCode());

            $locale = request()->get('locale') ?: app()->getLocale();

            return $query->distinct()
                ->leftJoin('products', 'product_flat.product_id', '=', 'products.id')
                ->addSelect('product_flat.*')
                ->where('product_flat.status', 1)
                ->where('product_flat.channel', $channel)
                ->where('product_flat.locale', $locale)
                ->where('products.parent_id',NULL)
                ->inRandomOrder();

        })->get();

        if ($productreward) {

            return view($this->_config['view'], compact('productreward', 'products'));
        }

        return redirect()->back();

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function editProductSpecificReward($id)
    {
        $productreward = $this->productSpecificTimeRewardRepository->edit($id);

        $products = app(\Webkul\Product\Repositories\ProductFlatRepository::class)->scopeQuery(function ($query) {
            $channel = request()->get('channel') ?: (core()->getCurrentChannelCode() ?: core()->getDefaultChannelCode());

            $locale = request()->get('locale') ?: app()->getLocale();

            return $query->distinct()
                ->leftJoin('products', 'product_flat.product_id', '=', 'products.id')
                ->addSelect('product_flat.*')
                ->where('product_flat.status', 1)
                ->where('product_flat.channel', $channel)
                ->where('product_flat.locale', $locale)
                ->where('products.parent_id',NULL)
                ->inRandomOrder();

        })->get();
        
        if ($productreward) {
            return view($this->_config['view'], compact('productreward', 'products'));
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function productRewardStore()
    {

        if(empty(request()->product_id)){
            session()->flash('error', trans('admin::app.response.last-delete-error', ['name' => 'Product Select']));      
            return redirect()->back();
        }

        $productreward = $this->productRewardRepository->create(request()->all());

        session()->flash('success', trans('admin::app.response.create-success', ['name' => 'Product Reward']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function productRewardUpdate($id)
    {

        if(empty(request()->product_id)){
            session()->flash('error', trans('admin::app.response.last-delete-error', ['name' => 'Product Select']));      
            return redirect()->back();
        }

        $productreward = $this->productRewardRepository->update(request()->all(), $id);

        session()->flash('success', trans('admin::app.response.update-success', ['name' => 'Product Reward']));

        return redirect()->route($this->_config['redirect']);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function productSpecificTimeRewardStore()
    {
        if(empty(request()->product_id)){
            session()->flash('error', trans('admin::app.response.last-delete-error', ['name' => 'Product Select']));      
            return redirect()->back();
        }

        $productreward = $this->productSpecificTimeRewardRepository->create(request()->all());

        session()->flash('success', trans('admin::app.response.create-success', ['name' => 'Product Reward']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function productSpecificTimeRewardUpdate($id)
    {
        if(empty(request()->product_id)){
            session()->flash('error', trans('admin::app.response.last-delete-error', ['name' => 'Product Select']));      
            return redirect()->back();
        }

        $productreward = $this->productSpecificTimeRewardRepository->update(request()->all(), $id);

        session()->flash('success', trans('admin::app.response.update-success', ['name' => 'Product Reward']));

        return redirect()->route($this->_config['redirect']);
    }
}
