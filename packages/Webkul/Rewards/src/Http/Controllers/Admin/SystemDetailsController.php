<?php

namespace Webkul\Rewards\Http\Controllers\Admin;

use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Rewards\DataGrids\SystemDetailByCustomerDataGrid;
use Webkul\Rewards\DataGrids\SystemDetailRewardPoints;
use Webkul\Rewards\Repositories\RewardPointRepository;

class SystemDetailsController extends Controller
{
    /**
     * Create a new datagrid instance.
     *
     * @return void
     */
    public function __construct(
        protected CustomerRepository $customerRepository,
        protected RewardPointRepository $rewardPointRepository,
    ) {}

    /* Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (request()->ajax()) {
            return app(SystemDetailRewardPoints::class)->toJson();
        }

        return view('rewards::admin.rewards.system.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
     * @return View
     */
    public function view($id)
    {
        if (request()->ajax()) {
            return app(SystemDetailByCustomerDataGrid::class)->toJson();
        }

        $customer = $this->customerRepository->find(request('id'));

        return view('rewards::admin.rewards.system.view', compact('customer'));
    }

    /**
     * Show the customer birthday reward.
     *
     * @return void
     */
    public function setRewardsOnCustomerBirthday()
    {
        return $this->rewardPointRepository->setRewardsOnCustomerBirthday();
    }
}
