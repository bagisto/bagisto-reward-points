<?php

namespace Webkul\Rewards\Http\Controllers\Shop;

use Illuminate\View\View;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Rewards\DataGrids\Customer\RewardPointDataGrid as CustomerRewardPointDataGrid;
use Webkul\Rewards\Repositories\RewardPointRepository;

class RewardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected CustomerRepository $customerRepository,
        protected RewardPointRepository $rewardPointRepository,
    ) {}

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(CustomerRewardPointDataGrid::class)->toJson();
        }

        $customer = $this->customerRepository->find(auth()->guard('customer')->user()->id)->id;

        $totalRewardPoints = $this->rewardPointRepository->totalRewardPoints($customer);

        return view('rewards::shop.customers.rewards.index', compact('customer', 'totalRewardPoints'));
    }
}
