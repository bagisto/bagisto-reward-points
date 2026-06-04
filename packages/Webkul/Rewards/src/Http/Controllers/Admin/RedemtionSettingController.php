<?php

namespace Webkul\Rewards\Http\Controllers\Admin;

use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Rewards\Repositories\RedemptionSettingRepository;

class RedemtionSettingController extends Controller
{
    /**
     * Create a new datagrid instance.
     *
     * @return void
     */
    public function __construct(protected RedemptionSettingRepository $redemptionSettingRepository) {}

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function index()
    {
        $data = $this->redemptionSettingRepository->getData();

        return view('rewards::admin.rewards.redemption.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function store()
    {
        $data = $this->redemptionSettingRepository->getData();

        if ($data) {
            $data->redemp_over_subtotal = request()->redemp_over_subtotal;

            $data->apply_points_checkout = request()->apply_points_checkout;

            $data->points = intval(request()->points);

            $data->conversion_rate = request()->conversion_rate;

            $data->save();
        } else {
            $this->redemptionSettingRepository->create(request()->only([
                'redemp_over_subtotal',
                'points',
                'conversion_rate',
                'apply_points_checkout',
            ]));
        }

        session()->flash('success', trans('rewards::app.admin.rewards.redemption.index.update-success'));

        return redirect()->route('admin.reward.redemption.index');
    }
}
