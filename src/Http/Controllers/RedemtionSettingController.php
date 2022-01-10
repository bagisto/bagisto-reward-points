<?php

namespace Webkul\Rewards\Http\Controllers;

use Webkul\Product\Http\Controllers\Controller;
use Webkul\Rewards\Repositories\RedemptionSettingResponsitory;

class RedemtionSettingController  extends Controller
{
    /**
     * RedemptionSettingResponsitory object
     *
     * @var object
     */
    protected $redemptionSettingResponsitory;

    /**
     * Create a new datagrid instance.
     * @param  Webkul\Rewards\Repositories\RedemptionSettingResponsitory $redemptionSettingResponsitory
     * @return void
     */
    public function __construct(RedemptionSettingResponsitory $redemptionSettingResponsitory)
    {
        $this->redemptionSettingResponsitory = $redemptionSettingResponsitory;
        $this->_config = request('_config');
    }
    /* Show the form for creating a new resource.
    *
    * @return \Illuminate\View\View
    */
    public function index()
    {
        $data = $this->redemptionSettingResponsitory->getData();
        return view($this->_config['view'],compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function store()
    {
       
        if($data = $this->redemptionSettingResponsitory->getData()) {
            $data->redemp_over_subtotal = request()->redemp_over_subtotal;
            $data->apply_points_checkout = request()->apply_points_checkout;
            $data->points = intVal(request()->points);
            $data->conversion_rate = request()->conversion_rate;
            $data->save();
        } else {
            $redemptionsetting = $this->redemptionSettingResponsitory->create(request()->all());
        }

        session()->flash('success', trans('admin::app.response.update-success', ['name' => 'Redemption Setting']));

        return redirect()->route($this->_config['redirect']);
    }

}
